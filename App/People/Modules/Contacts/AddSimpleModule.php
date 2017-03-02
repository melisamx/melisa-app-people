<?php namespace App\People\Modules\Contacts;

use App\Core\Logics\Modules\Outbuildings;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class AddSimpleModule extends Outbuildings
{
    
    public $event = 'event.people.contacts.addSimple.access';
    
    public function dataDictionary() {
        
        return [
            'success'=>true,
            'data'=>[
                'token'=>csrf_token(),
                'wrapper'=>[
                    'title'=>'Agregar persona',
                ],
                'modules'=>[
                    'submit'=>$this->module('task.people.contacts.simple.create'),
                    'bloodTypes'=>$this->module('task.people.bloodTypes.paging'),
                    'labelsPeople'=>$this->module('task.people.labels.people.paging'),
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
