<?php namespace App\People\Database\Seeds\Modules\Universal\Contacts\Addresses;

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
                'name'=>'Paginar lista de direcciones de un contacto',
                'url'=>'/people.php/contactsAddresses/',
                'description'=>'Módulo para paginar lista de direcciones de un contacto',
                'task'=>[
                    'key'=>'task.people.contacts.addresses.paging',
                    'name'=>'Paginar lista de direcciones de un contacto',
                    'description'=>'Permitir paginar lista de direcciones de un contacto',
                    'pattern'=>'read'
                ],
                'event'=>[
                    'key'=>'event.people.contacts.addresses.paging.success',
                    'description'=>'Listado de direcciones de un contacto paginado sastisfactoriamente'
                ]
            ],
        ]);
        
    }
    
}
