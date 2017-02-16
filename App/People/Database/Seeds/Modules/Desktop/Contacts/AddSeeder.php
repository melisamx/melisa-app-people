<?php namespace App\People\Database\Seeds\Modules\Desktop\Contacts;

use Melisa\Laravel\Database\InstallSeeder;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class AddSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        $this->installModule([
            [
                'name'=>'Agregar contacto',
                'url'=>'/people.php/modules/contacts/add',
                'description'=>'Módulo interfaz para agregar contacto',
                'nameSpace'=>'Melisa.people.view.desktop.contacts.add.Wrapper',
                'task'=>[
                    'key'=>'task.people.contacts.add.access',
                    'name'=>'Acceso a agregar contacto',
                    'description'=>'Permitir acceso a agregar contacto',
                    'pattern'=>'access'
                ],
                'option'=>[
                    'key'=>'option.people.contacts.add.access',
                    'name'=>'Opción para agregar contacto',
                    'text'=>'Agregar contacto'
                ]
            ],
        ]);
        
    }
    
}
