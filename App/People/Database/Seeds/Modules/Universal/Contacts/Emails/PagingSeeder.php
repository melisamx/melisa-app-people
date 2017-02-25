<?php namespace App\People\Database\Seeds\Modules\Universal\Contacts\Emails;

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
                'name'=>'Paginar lista de correos electronicos de un contacto',
                'url'=>'/people.php/contactsEmails/',
                'description'=>'Módulo para paginar lista de correos electronicos de un contacto',
                'task'=>[
                    'key'=>'task.people.contacts.emails.paging',
                    'name'=>'Paginar lista de correos electronicos de un contacto',
                    'description'=>'Permitir paginar lista de correos electronicos de un contacto',
                    'pattern'=>'read'
                ],
                'event'=>[
                    'key'=>'event.people.contacts.emails.paging.success',
                    'description'=>'Listado de correos electronicos de un contacto paginado sastisfactoriamente'
                ]
            ],
        ]);
        
    }
    
}
