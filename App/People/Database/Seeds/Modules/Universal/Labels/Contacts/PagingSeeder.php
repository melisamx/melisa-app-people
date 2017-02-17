<?php namespace App\People\Database\Seeds\Modules\Universal\Labels\Contacts;

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
                'name'=>'Paginar lista de etiquetas de contactos',
                'url'=>'/people.php/labelsContacts/',
                'description'=>'Módulo para paginar lista de etiquetas de contactos',
                'task'=>[
                    'key'=>'task.people.labels.contacts.paging',
                    'name'=>'Paginar lista de etiquetas de contactos',
                    'description'=>'Permitir paginar lista de etiquetas de contactos',
                    'pattern'=>'read'
                ],
                'event'=>[
                    'key'=>'event.people.labels.contacts.paging.success',
                    'description'=>'Listado de etiquetas de contactos paginado sastisfactoriamente'
                ]
            ],
        ]);
        
    }
    
}
