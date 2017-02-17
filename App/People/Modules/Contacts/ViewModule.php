<?php namespace App\People\Modules\Contacts;

use App\Core\Logics\Modules\Outbuildings;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class ViewModule extends Outbuildings
{
    
    public $event = 'event.people.contacts.view.access';
    
    public function dataDictionary() {
        
        return [
            'success'=>true,
            'data'=>[
                'token'=>csrf_token(),
                'wrapper'=>[
                    'title'=>'Conctactos',
                ],
                'modules'=>[
                    'contacts'=>$this->module('task.people.contacts.paging'),
                    'delete'=>$this->module('task.people.contacts.delete', false),
                    'add'=>$this->module('task.people.contacts.add.access', false),
                    'labelsContacts'=>$this->module('task.people.labels.contacts.paging'),
                ],
            ]
        ];
        
    }
    
}
