<?php namespace App\People\Logics\Contacts;

use App\People\Logics\Contacts\CreateLogic;

/**
 * Update contact and all information posible (emails, phone numbers, etc.)
 *
 * @author Luis Josafat Heredia Contreras
 */
class UpdateLogic extends CreateLogic
{
    
    protected $eventSuccess = 'people.contacts.update.success';
    
    public function init($input = [])
    {
        
        $people = $this->getPeople($input['id']);
        
        return parent::init($input);
        
    }
    
    public function getPeople($idPeople)
    {
        
        $record = $this->peopleRepository->findOrFail($idPeople);
        
        if( $record === false) {
            return false;
        }
        
        if( !$record) {
            return $this->error('La persona {p} no existe o acaba de ser eliminada', [
                'p'=>$idPeople
            ]);
        }
        
        return $record;
        
    }
    
    public function createPeople(&$input)
    {
        
        $input ['idIdentityUpdated']= $this->getIdentity();
        $input ['idBloodType']= empty($input['idBloodType']) ? 
                null : $input['idBloodType'];
        $input ['birthday']= empty($input['birthday']) ? 
                null : $input['birthday'];
        
        $result = $this->peopleRepository->update($input, $input['id']);
        
        if( $result === false) {
            return $this->error('Imposible modificar registro de la persona');
        }
        
        return $input['id'];
        
    }
    
    public function createLabels($idPeople, &$input)
    {
        
        $result = $this->peopleLabelsRepository->getModel()
                ->where('idPeople', $idPeople)
                ->delete();
        
        if( $result === false) {
            return $this->error('Imposible eliminar las antiguas etiquetas de la persona {p}', [
                'p'=>$idPeople
            ]);
        }
        
        return parent::createLabels($idPeople, $input);
        
    }
    
    public function createAddresses($idPeople, &$input)
    {        
        $records = json_decode($input);
        
        if( empty($records)) {
            $result = $this->peopleAddressesRepository->getModel()
                    ->where('idPeople', $idPeople)
                    ->delete();
            return [];
        }
        
        $ids = [];
        $idIdentity = $this->getIdentity();
        foreach($records as $record) {
            
            $phoneNumber = $this->peopleAddressesRepository->findWhere([
                'idPeople'=>$idPeople,
                'idState'=>$record->idState,
                'idMunicipality'=>$record->idMunicipality,
                'street'=>$record->street,
            ]);
            
            if( !$phoneNumber->count()) {                
                $result = $this->peopleAddressesRepository->create([
                    'idPeople'=>$idPeople,
                    'idIdentityCreated'=>$idIdentity,
                    'idState'=>$record->idState,
                    'idMunicipality'=>$record->idMunicipality,
                    'street'=>$record->street,
                    'postalCode'=>$record->postalCode,
                    'colony'=>$record->colony,
                    'idLabel'=>empty($record->idLabel) ? null : $record->idLabel,
                    'isPrimary'=>empty($record->isPrimary) ? false : true,
                ]);
            } else {
                $result = $this->peopleAddressesRepository->updateOrCreate([
                    'idPeople'=>$idPeople,                
                    'idState'=>$record->idState,
                    'idMunicipality'=>$record->idMunicipality,
                    'street'=>$record->street,
                ], [
                    'idIdentityUpdated'=>$idIdentity,
                    'postalCode'=>$record->postalCode,
                    'colony'=>$record->colony,
                    'idLabel'=>empty($record->idLabel) ? null : $record->idLabel,
                    'isPrimary'=>empty($record->isPrimary) ? false : true,
                ]);
            }
            
            if( !$result) {
                return false;
            }
            
            $ids []= isset($result->id) ? $result->id : $result;
            
        }
        
        /* delete emails not include in request */
        $result = $this->peopleAddressesRepository->getModel()
                ->where('idPeople', $idPeople)
                ->whereNotIn('id', $ids)
                ->delete();
        
        if( $result === false) {
            return false;
        }
        
        return $ids;        
    }
    
    public function createPhoneNumbers($idPeople, &$input)
    {        
        $records = json_decode($input);
        
        if( empty($records)) {
            $result = $this->peoplePhoneNumbersRepository->getModel()
                    ->where('idPeople', $idPeople)
                    ->delete();
            return [];
        }
        
        $ids = [];
        $idIdentity = $this->getIdentity();
        foreach($records as $record) {
            
            $phoneNumber = $this->peoplePhoneNumbersRepository->findWhere([
                'idPeople'=>$idPeople,
                'number'=>$record->number
            ]);
            
            if( !$phoneNumber->count()) {
                $result = $this->peoplePhoneNumbersRepository->create([
                    'idPeople'=>$idPeople,
                    'number'=>$record->number,   
                    'idLabel'=>empty($record->idLabel) ? null : $record->idLabel,
                    'idIdentityCreated'=>$idIdentity,
                    'isPrimary'=>empty($record->isPrimary) ? false : true,
                ]);
            } else {
                $result = $this->peoplePhoneNumbersRepository->updateOrCreate([
                    'idPeople'=>$idPeople,
                    'number'=>$record->number,                
                ], [
                    'idIdentityUpdated'=>$idIdentity,
                    'idLabel'=>empty($record->idLabel) ? null : $record->idLabel,
                    'isPrimary'=>empty($record->isPrimary) ? false : true,
                ]);
            }
            
            if( !$result) {
                return false;
            }
            
            $ids []= isset($result->id) ? $result->id : $result;
            
        }
        
        /* delete emails not include in request */
        $result = $this->peoplePhoneNumbersRepository->getModel()
                ->where('idPeople', $idPeople)
                ->whereNotIn('id', $ids)
                ->delete();
        
        if( $result === false) {
            return false;
        }
        
        return $ids;
    }
    
    public function createEmails($idPeople, &$input)
    {     
        $records = json_decode($input);
        
        if( empty($records)) {
            
            /* delete emails not include in request */
            $result = $this->peopleEmailsRepository->getModel()
                    ->where('idPeople', $idPeople)
                    ->delete();
            return [];
        }
        
        $ids = [];
        $idIdentity = $this->getIdentity();        
        foreach($records as $record) {
            
            $exist = $this->peopleEmailsRepository->findWhere([
                'idPeople'=>$idPeople,
                'email'=>$record->email
            ]);
            
            if( !$exist->count()) {
                $result = $this->peopleEmailsRepository->create([
                    'idPeople'=>$idPeople,
                    'email'=>$record->email,
                    'idLabel'=>empty($record->idLabel) ? null : $record->idLabel,
                    'idIdentityCreated'=>$idIdentity,
                    'isPrimary'=>empty($record->isPrimary) ? false : true,
                ]);
            } else {
                $result = $this->peopleEmailsRepository->updateOrCreate([
                    'idPeople'=>$idPeople,
                    'email'=>$record->email,
                ], [
                    'idLabel'=>empty($record->idLabel) ? null : $record->idLabel,
                    'idIdentityUpdated'=>$idIdentity,
                    'isPrimary'=>empty($record->isPrimary) ? false : true,
                ]);
            }
            
            if( !$result) {
                return false;
            }
            
            $ids []= isset($result->id) ? $result->id : $result;
            
        }
        
        /* delete emails not include in request */
        $result = $this->peopleEmailsRepository->getModel()
                ->where('idPeople', $idPeople)
                ->whereNotIn('id', $ids)
                ->delete();
        
        if( $result === false) {
            return false;
        }
        
        return $ids;
    }
    
    public function createFiles($idPeople, &$input)
    {     
        $records = json_decode($input);
        
        if( empty($records)) {
            /* delete emails not include in request */
            $result = $this->peopleFilesRepository->getModel()
                    ->where('idPeople', $idPeople)
                    ->delete();
            return [];
        }
        
        $ids = [];
        $idIdentity = $this->getIdentity();
        foreach($records as $record) {
            
            $exist = $this->peopleFilesRepository->findWhere([
                'idPeople'=>$idPeople,
                'idFile'=>$record->idFile
            ]);
            
            if( !$exist->count()) {
                $result = $this->peopleFilesRepository->create([
                    'idPeople'=>$idPeople,
                    'idIdentityCreated'=>$idIdentity,
                    'idFile'=>$record->idFile,
                    'idFileType'=>$record->idFileType,
                ]);
            } else {
                $result = $this->peopleFilesRepository->updateOrCreate([
                    'idPeople'=>$idPeople,
                    'idFile'=>$record->idFile,
                ], [
                    'idIdentityUpdated'=>$idIdentity,
                    'idFileType'=>$record->idFileType,
                ]);
            }
            
            if( !$result) {
                return false;
            }
            
            $ids []= isset($result->id) ? $result->id : $result;
            
        }
        
        /* delete emails not include in request */
        $result = $this->peopleFilesRepository->getModel()
                ->where('idPeople', $idPeople)
                ->whereNotIn('id', $ids)
                ->delete();
        
        if( $result === false) {
            return false;
        }
        
        return $ids;
    }
    
}
