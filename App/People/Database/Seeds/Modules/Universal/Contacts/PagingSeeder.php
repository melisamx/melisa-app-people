<?php namespace App\People\Database\Seeds\Modules\Universal\Contacts;

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
                'name'=>'Paginar lista de contactos',
                'url'=>'/people.php/contacts/',
                'description'=>'Módulo para paginar lista de contactos',
                'task'=>[
                    'key'=>'task.people.contacts.paging',
                    'name'=>'Paginar lista de contactos',
                    'description'=>'Permitir paginar lista de contactos',
                    'pattern'=>'read'
                ],
            ],
        ]);
        
    }
    
}
