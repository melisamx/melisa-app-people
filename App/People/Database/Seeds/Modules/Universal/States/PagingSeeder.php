<?php namespace App\People\Database\Seeds\Modules\Universal\States;

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
                'name'=>'Paginar lista de estados',
                'url'=>'/people.php/states/',
                'description'=>'Módulo para paginar lista de estados',
                'task'=>[
                    'key'=>'task.people.states.paging',
                    'name'=>'Paginar lista de estados',
                    'description'=>'Permitir paginar lista de estados',
                    'pattern'=>'read'
                ],
                'event'=>[
                    'key'=>'event.people.states.paging.success',
                    'description'=>'Listado de estados paginado sastisfactoriamente'
                ]
            ],
        ]);
        
    }
    
}
