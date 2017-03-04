<?php namespace App\People\Database\Seeds\Modules\Universal\Contacts;

use Melisa\Laravel\Database\InstallSeeder;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class ReportSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        $this->installModule([
            [
                'name'=>'Ver reporte de contacto',
                'url'=>'/people.php/contacts/report/',
                'description'=>'Módulo para ver reporte de contacto',
                'task'=>[
                    'key'=>'task.people.contacts.report',
                    'name'=>'Acceso a ver reporte de contacto',
                    'description'=>'Permitir ver reporte de contacto',
                    'pattern'=>'read'
                ],
                'event'=>[
                    'key'=>'event.people.contacts.report.success',
                    'description'=>'Acceso a reporte de contacto'
                ],
            ],
        ]);
        
    }
    
}
