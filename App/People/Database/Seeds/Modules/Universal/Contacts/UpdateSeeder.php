<?php namespace App\People\Database\Seeds\Modules\Universal\Contacts;

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
                'url'=>'/people.php/contacts/update/',
                'description'=>'Módulo para modificar contactos',
                'task'=>[
                    'key'=>'task.people.contacts.update',
                    'name'=>'Acceso a modificar contactos',
                    'description'=>'Permitir modificar contactos',
                    'pattern'=>'update'
                ],
                'event'=>[
                    'key'=>'event.people.contacts.update.success',
                    'description'=>'Contacto modificado'
                ],
            ],
        ]);
        
    }
    
}
