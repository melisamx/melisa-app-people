<?php namespace App\People\Modules\Labels\Contacts;

use App\Core\Logics\Modules\Outbuildings;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class ViewModule extends Outbuildings
{
    
    public function dataDictionary() {
        
        return [
            'success'=>true,
            'data'=>[
                'token'=>csrf_token(),
                'wrapper'=>[
                    'title'=>'Etiquetas de contactos',
                ],
                'modules'=>[
                    'labels'=>$this->module('task.people.labels.contacts.paging'),
                    'delete'=>$this->module('task.people.labels.contacts.delete', false),
                    'add'=>$this->module('task.people.labels.contacts.add.access', false),
                ],
            ]
        ];
        
    }
    
}
