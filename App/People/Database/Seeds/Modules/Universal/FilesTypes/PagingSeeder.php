<?php namespace App\People\Database\Seeds\Modules\Universal\FilesTypes;

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
                'name'=>'Paginar lista de tipos de archivos',
                'url'=>"/forge.php/records/paging/$connection/$database/filesTypes/",
                'description'=>'Módulo para paginar lista de tipos de archivos',
                'task'=>[
                    'key'=>'task.people.filesTypes.paging',
                    'name'=>'Paginar lista de tipos de archivos',
                    'description'=>'Permitir paginar lista de tipos de archivos',
                    'pattern'=>'read'
                ],
                'event'=>[
                    'key'=>'event.people.filesTypes.paging.success',
                    'description'=>'Listado de tipos de archivos paginado sastisfactoriamente'
                ]
            ],
        ]);
        
    }
    
}
