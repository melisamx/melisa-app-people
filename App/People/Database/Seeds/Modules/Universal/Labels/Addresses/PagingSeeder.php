<?php namespace App\People\Database\Seeds\Modules\Universal\Labels\Addresses;

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
                'name'=>'Paginar lista de etiquetas de domicilios',
                'url'=>'/people.php/addresses/',
                'description'=>'Módulo para paginar lista de etiquetas de domicilios',
                'task'=>[
                    'key'=>'task.people.labels.addresses.paging',
                    'name'=>'Paginar lista de etiquetas de domicilios',
                    'description'=>'Permitir paginar lista de etiquetas de domicilios',
                    'pattern'=>'read'
                ],
                'event'=>[
                    'key'=>'event.people.labels.addresses.paging.success',
                    'description'=>'Listado de etiquetas de direcciones paginado sastisfactoriamente'
                ]
            ],
        ]);
        
    }
    
}
