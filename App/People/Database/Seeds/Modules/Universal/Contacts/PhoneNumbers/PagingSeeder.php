<?php namespace App\People\Database\Seeds\Modules\Universal\Contacts\PhoneNumbers;

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
                'name'=>'Paginar lista de números telefonicos de un contacto',
                'url'=>'/people.php/contactsPhoneNumbers/',
                'description'=>'Módulo para paginar lista de números telefonicos de un contacto',
                'task'=>[
                    'key'=>'task.people.contacts.phoneNumbers.paging',
                    'name'=>'Paginar lista de números telefonicos de un contacto',
                    'description'=>'Permitir paginar lista de números telefonicos de un contacto',
                    'pattern'=>'read'
                ],
                'event'=>[
                    'key'=>'event.people.contacts.phoneNumbers.paging.success',
                    'description'=>'Listado de números telefonicos de un contacto paginado sastisfactoriamente'
                ]
            ],
        ]);
        
    }
    
}
