<?php namespace App\People\Database\Seeds\Modules\Desktop\Contacts;

use Melisa\Laravel\Database\InstallSeeder;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class AddSimpleSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        $this->installModule([
            [
                'name'=>'Agregar contacto simple',
                'url'=>'/people.php/modules/contacts/addSimple',
                'description'=>'Módulo interfaz para agregar contacto simple',
                'nameSpace'=>'Melisa.people.view.desktop.contacts.addSimple.Wrapper',
                'task'=>[
                    'key'=>'task.people.contacts.addSimple.access',
                    'name'=>'Acceso a agregar contacto simple',
                    'description'=>'Permitir acceso a agregar contacto simple',
                    'pattern'=>'access'
                ],
                'option'=>[
                    'key'=>'option.people.contacts.addSimple.access',
                    'name'=>'Opción para agregar contacto simple',
                    'text'=>'Agregar contacto simple'
                ],
                'event'=>[
                    'key'=>'event.people.contacts.addSimple.access',
                    'description'=>'Acceso al módulo agregar contactos (formulario simple)'
                ]
            ],
        ]);
        
    }
    
}
