<?php namespace App\People\Database\Seeds\Modules\Universal\Contacts;

use Melisa\Laravel\Database\InstallSeeder;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class CreateSimpleSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        $this->installModule([
            [
                'name'=>'Crear contacto simple',
                'url'=>'/people.php/contacts/simple/',
                'description'=>'Módulo para crear contacto simple',
                'task'=>[
                    'key'=>'task.people.contacts.simple.create',
                    'name'=>'Acceso para crear contacto simple',
                    'description'=>'Permitir crear contacto simple',
                    'pattern'=>'create'
                ],
                'event'=>[
                    'key'=>'event.people.contacts.create.simple.create.success',
                    'description'=>'Crear contacto simple'
                ]
            ],
        ]);
        
    }
    
}
