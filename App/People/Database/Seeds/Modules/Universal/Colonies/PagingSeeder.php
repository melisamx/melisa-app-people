<?php namespace App\People\Database\Seeds\Modules\Universal\Colonies;

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
                'name'=>'Paginar lista de colonias',
                'url'=>"/forge.php/records/paging/$connection/$database/colonies/",
                'description'=>'Módulo para paginar lista de colonias',
                'task'=>[
                    'key'=>'task.people.colonies.paging',
                    'name'=>'Paginar lista de colonias',
                    'description'=>'Permitir paginar lista de colonias',
                    'pattern'=>'read'
                ],
                'event'=>[
                    'key'=>'event.people.colonies.paging.success',
                    'description'=>'Listado de colonias paginado sastisfactoriamente'
                ]
            ],
        ]);
        
    }
    
}
