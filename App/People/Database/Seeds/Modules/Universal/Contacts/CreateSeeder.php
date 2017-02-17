<?php namespace App\People\Database\Seeds\Modules\Universal\Contacts;

use Melisa\Laravel\Database\InstallSeeder;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class CreateSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        $this->installModule([
            [
                'name'=>'Crear contacto',
                'url'=>'/people.php/contacts/',
                'description'=>'Módulo para crear contacto',
                'task'=>[
                    'key'=>'task.people.contacts.create',
                    'name'=>'Acceso para crear contacto',
                    'description'=>'Permitir crear contacto',
                    'pattern'=>'create'
                ],
                'event'=>[
                    'key'=>'event.people.contacts.create.success',
                    'description'=>'Crear contacto'
                ]
            ],
        ]);
        
    }
    
}
