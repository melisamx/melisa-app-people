<?php namespace App\People\Modules\Contacts;

use App\Core\Logics\Modules\Outbuildings;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class AddModule extends Outbuildings
{
    
    public function dataDictionary() {
        
        return [
            'success'=>true,
            'data'=>[
                'token'=>csrf_token(),
                'wrapper'=>[
                    'title'=>'Agregar contacto',
                ],
                'modules'=>[
                    'submit'=>$this->module('task.people.contacts.create'),
                    'labelsEmails'=>$this->module('task.people.labels.emails.paging'),
                    'labelsPhoneNumbers'=>$this->module('task.people.labels.phoneNumbers.paging'),
                    'labelsAddresses'=>$this->module('task.people.labels.addresses.paging'),
                    'states'=>$this->module('task.people.states.paging'),
                    'municipalities'=>$this->module('task.people.municipalities.paging'),
                ],
                'i18n'=>[
                    'txtName'=>'Nombre',
                    'btnSave'=>'Guardar',
                    'frmMessageLoading'=>'Guardando cambios'
                ]
            ]
        ];
        
    }
    
}
