<?php namespace App\People\Logics\Contacts;

use App\People\Repositories\PeopleRepository;
use App\People\Repositories\PeopleEmailsRepository;
use App\People\Repositories\PeoplePhoneNumbersRepository;
use App\People\Repositories\PeopleAddressesRepository;
use Melisa\core\LogicBusiness;

/**
 * Create contact and all information posible (emails, phone numbers, etc.)
 *
 * @author Luis Josafat Heredia Contreras
 */
class CreateLogic
{
    use LogicBusiness;
    
    protected $peopleRepository;
    protected $peopleEmailsRepository;
    protected $peoplePhoneNumbersRepository;
    protected $peopleAddressesRepository;

    public function __construct(
          PeopleRepository $peopleRepository,
          PeopleEmailsRepository $peopleEmailsRepository,
          PeoplePhoneNumbersRepository $peoplePhoneNumbersRepository,
          PeopleAddressesRepository $peopleAddressesRepository
        )
    {
        $this->peopleRepository = $peopleRepository;
        $this->peopleEmailsRepository = $peopleEmailsRepository;
        $this->peoplePhoneNumbersRepository = $peoplePhoneNumbersRepository;
        $this->peopleAddressesRepository = $peopleAddressesRepository;
    }
    
    public function init($input = [])
    {
        
        $this->peopleRepository->beginTransaction();
        
        $idPeople = $this->createPeople($input);
        
        if( !$idPeople) {
            return false;
        }
        
        $event = [
            'idPeople'=>$idPeople
        ];
        
        if( !$this->createDetails($idPeople, $input, $event)) {
            return $this->peopleRepository->rollBack();
        }
        
        if( !$this->emitEvent('contacts.create.success', $event)) {
            return $this->peopleRepository->rollBack();
        }
        
        $this->peopleRepository->commit();
        return $event;
        
    }
    
    public function createDetails($idPeople, &$input, &$event)
    {
        
        $idEmails = $this->createEmails($idPeople, $input['emails']);
        
        if( $idEmails === false) {
            return false;
        } else if( !empty($idEmails)) {
            $event ['idEmails']= $idEmails;
        }
        
        $idPhoneNumbers = $this->createPhoneNumbers($idPeople, $input['phoneNumbers']);
        
        if( $idPhoneNumbers === false) {
            return false;
        } else if( !empty($idPhoneNumbers)) {
            $event ['idPhoneNumbers']= $idPhoneNumbers;
        }
        
        $idAddresses = $this->createAddresses($idPeople, $input['addresses']);
        
        if( $idAddresses === false) {
            return false;
        } else if( !empty($idAddresses)) {
            $event ['idAddresses']= $idAddresses;
        }
        
        return true;
        
    }
    
    public function createAddresses($idPeople, &$input)
    {
        
        $records = json_decode($input);
        
        if( empty($records)) {
            return [];
        }
        
        $ids = [];
        $idIdentity = $this->getIdentity();
        foreach($records as $record) {
            
            $result = $this->peopleAddressesRepository->create([
                'idPeople'=>$idPeople,
                'idIdentityCreated'=>$idIdentity,
                'idState'=>$record->idState,
                'idMunicipality'=>$record->idMunicipality,
                'street'=>$record->street,
                'postalCode'=>$record->postalCode,
                'colony'=>$record->colony,
                'idLabel'=>empty($record->idLabel) ? null : $record->idLabel,
            ]);
            
            if( !$result) {
                return false;
            }
            
            $ids []= $result;
            
        }
        
        return $ids;
        
    }
    
    public function createPhoneNumbers($idPeople, &$input)
    {
        
        $records = json_decode($input);
        
        if( empty($records)) {
            return [];
        }
        
        $ids = [];
        $idIdentity = $this->getIdentity();
        foreach($records as $record) {
            
            $result = $this->peoplePhoneNumbersRepository->create([
                'idPeople'=>$idPeople,
                'idIdentityCreated'=>$idIdentity,
                'number'=>$record->number,
                'idLabel'=>empty($record->idLabel) ? null : $record->idLabel,
            ]);
            
            if( !$result) {
                return false;
            }
            
            $ids []= $result;
            
        }
        
        return $ids;
        
    }
    
    public function createEmails($idPeople, &$input)
    {
        
        $records = json_decode($input);
        
        if( empty($records)) {
            return [];
        }
        
        $ids = [];
        $idIdentity = $this->getIdentity();
        foreach($records as $record) {
            
            $result = $this->peopleEmailsRepository->create([
                'idPeople'=>$idPeople,
                'idIdentityCreated'=>$idIdentity,
                'email'=>$record->email,
                'idLabel'=>empty($record->idLabel) ? null : $record->idLabel,
            ]);
            
            if( !$result) {
                return false;
            }
            
            $ids []= $result;
            
        }
        
        return $ids;
        
    }
    
    public function createPeople(&$input)
    {
        
        $input ['idIdentityCreated']= $this->getIdentity();
        
        $idPeople = $this->peopleRepository->create($input);
        
        if( !$idPeople) {
            return $this->error('Imposible crear registro de la persona');
        }
        
        return $idPeople;
        
    }
    
}
