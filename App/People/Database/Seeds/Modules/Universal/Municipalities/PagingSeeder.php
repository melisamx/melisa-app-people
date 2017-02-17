<?php namespace App\People\Database\Seeds\Modules\Universal\Municipalities;

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
        
        $this->installModule([
            [
                'name'=>'Paginar lista de municipios',
                'url'=>'/people.php/municipalities/',
                'description'=>'Módulo para paginar lista de municipios',
                'task'=>[
                    'key'=>'task.people.municipalities.paging',
                    'name'=>'Paginar lista de municipios',
                    'description'=>'Permitir paginar lista de municipios',
                    'pattern'=>'read'
                ],
                'event'=>[
                    'key'=>'event.people.municipalities.paging.success',
                    'description'=>'Listado de municipios paginado sastisfactoriamente'
                ]
            ],
        ]);
        
    }
    
}
