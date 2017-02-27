<?php namespace App\People\Database\Seeds\Modules\Universal\Contacts\Files;

use Melisa\Laravel\Database\InstallSeeder;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class PagingSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        $database = env('DB_DATABASE_APP');
        $connection = env('FORGE_CONNECTION');
        
        $this->installModule([
            [
                'name'=>'Paginar lista de archivos de un contacto',
                'url'=>"/forge.php/records/paging/$connection/$database/contactsFiles/",
                'description'=>'Módulo para paginar lista de archivos de un contacto',
                'task'=>[
                    'key'=>'task.people.contacts.files.paging',
                    'name'=>'Paginar lista de archivos de un contacto',
                    'description'=>'Permitir paginar lista de archivos de un contacto',
                    'pattern'=>'read'
                ],
                'event'=>[
                    'key'=>'event.people.contacts.files.paging.success',
                    'description'=>'Listado de archivos de un contacto paginado sastisfactoriamente'
                ]
            ],
        ]);
        
    }
    
}
