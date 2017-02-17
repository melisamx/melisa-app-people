<?php namespace App\People\Database\Seeds\Modules\Universal\BloodTypes;

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
                'name'=>'Paginar lista de tipos de sangre',
                'url'=>'/people.php/bloodTypes/',
                'description'=>'Módulo para paginar lista de tipos de sangre',
                'task'=>[
                    'key'=>'task.people.bloodTypes.paging',
                    'name'=>'Paginar lista de tipos de sangre',
                    'description'=>'Permitir paginar lista de tipos de sangre',
                    'pattern'=>'read'
                ],
                'event'=>[
                    'key'=>'event.people.bloodTypes.paging.success',
                    'description'=>'Listado de tipos de sangre paginado sastisfactoriamente'
                ]
            ],
        ]);
        
    }
    
}
