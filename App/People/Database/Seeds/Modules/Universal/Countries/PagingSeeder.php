<?php namespace App\People\Database\Seeds\Modules\Universal\Countries;

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
                'name'=>'Paginar lista de ciudades',
                'url'=>"/forge.php/records/paging/$connection/$database/countries/",
                'description'=>'Módulo para paginar lista de ciudades',
                'task'=>[
                    'key'=>'task.people.countries.paging',
                    'name'=>'Paginar lista de ciudades',
                    'description'=>'Permitir paginar lista de ciudades',
                    'pattern'=>'read'
                ],
                'event'=>[
                    'key'=>'event.people.countries.paging.success',
                    'description'=>'Listado de ciudades paginado sastisfactoriamente'
                ]
            ],
        ]);
        
    }
    
}
