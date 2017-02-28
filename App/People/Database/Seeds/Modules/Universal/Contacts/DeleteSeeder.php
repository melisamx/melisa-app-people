<?php namespace App\People\Database\Seeds\Modules\Universal\Contacts;

use Melisa\Laravel\Database\InstallSeeder;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class DeleteSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        $database = env('DB_DATABASE_APP');
        $connection = env('FORGE_CONNECTION');
        
        $this->installModule([
            [
                'name'=>'Eliminar contacto',
                'url'=>"/forge.php/records/delete/$connection/$database/people/",
                'description'=>'Módulo para eliminar contacto',
                'task'=>[
                    'key'=>'task.people.contacts.delete',
                    'name'=>'Acceso a eliminar contacto',
                    'description'=>'Permitir eliminar contacto',
                    'pattern'=>'delete'
                ],
                'event'=>[
                    'key'=>'event.people.contacts.delete.success',
                    'description'=>'Contacto eliminado satisfactoriamente'
                ],
            ],
        ]);
        
    }
    
}
