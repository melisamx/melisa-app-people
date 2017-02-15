<?php namespace App\People\Database\Seeds\Modules\Universal\Labels\Emails;

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
                'name'=>'Paginar lista de etiquetas de correos electrónicos',
                'url'=>'/people.php/labelsEmails/',
                'description'=>'Módulo para paginar lista de etiquetas de correos electrónicos',
                'task'=>[
                    'key'=>'task.people.labels.emails.paging',
                    'name'=>'Paginar lista de etiquetas de correos electrónicos',
                    'description'=>'Permitir paginar lista de etiquetas de correos electrónicos',
                    'pattern'=>'read'
                ],
            ],
        ]);
        
    }
    
}
