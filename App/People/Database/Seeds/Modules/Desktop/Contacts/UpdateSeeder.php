<?php namespace App\People\Database\Seeds\Modules\Desktop\Contacts;

use Melisa\Laravel\Database\InstallSeeder;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class UpdateSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        $this->installModule([
            [
                'name'=>'Modificar contacto',
                'url'=>'/people.php/modules/contacts/update/',
                'description'=>'Módulo interfaz para modificar contactos',
                'nameSpace'=>'Melisa.people.view.desktop.contacts.update.Wrapper',
                'task'=>[
                    'key'=>'task.people.contacts.update.access',
                    'name'=>'Acceso a modificar contactos',
                    'description'=>'Permitir acceso a modificar contactos',
                    'pattern'=>'access'
                ],
                'option'=>[
                    'key'=>'option.people.contacts.update.access',
                    'name'=>'Opción para modificar contactos',
                    'text'=>'Modificar contacto'
                ],
                'event'=>[
                    'key'=>'event.people.contacts.update.access',
                    'description'=>'Acceso al módulo modificar contactos'
                ]
            ],
        ]);
        
    }
    
}
