<?php namespace App\People\Database\Seeds\Modules\Universal\Labels\People;

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
                'name'=>'Paginar lista de etiquetas de personas',
                'url'=>'/people.php/labelsPeople/',
                'description'=>'Módulo para paginar lista de etiquetas de personas',
                'task'=>[
                    'key'=>'task.people.labels.people.paging',
                    'name'=>'Paginar lista de etiquetas de personas',
                    'description'=>'Permitir paginar lista de etiquetas de personas',
                    'pattern'=>'read'
                ],
                'event'=>[
                    'key'=>'event.people.labels.people.paging.success',
                    'description'=>'Listado de etiquetas de personas paginado sastisfactoriamente'
                ]
            ],
        ]);
        
    }
    
}
