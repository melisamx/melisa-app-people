<?php namespace App\People\Database\Seeds\Modules\Universal\Labels\PhoneNumbers;

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
                'name'=>'Paginar lista de etiquetas de números telefónicos',
                'url'=>'/people.php/labelsPhoneNumbers/',
                'description'=>'Módulo para paginar lista de etiquetas de números telefónicos',
                'task'=>[
                    'key'=>'task.people.labels.phoneNumbers.paging',
                    'name'=>'Paginar lista de etiquetas de números telefónicos',
                    'description'=>'Permitir paginar lista de etiquetas de números telefónicos',
                    'pattern'=>'read'
                ],
                'event'=>[
                    'key'=>'event.people.labels.phoneNumbers.paging.success',
                    'description'=>'Listado de etiquetas de numeros telefónicos paginado sastisfactoriamente'
                ]
            ],
        ]);
        
    }
    
}
