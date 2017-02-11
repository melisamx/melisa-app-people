<?php namespace App\People\Modules\Labels\Contacts;

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
                    'title'=>'Agregar etiqueta de contacto',
                ],
                'modules'=>[
                    'submit'=>$this->module('task.people.labels.contact.create'),
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
