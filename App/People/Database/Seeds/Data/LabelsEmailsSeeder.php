<?php namespace App\People\Database\Seeds\Data;

use Melisa\Laravel\Database\InstallSeeder;
use App\People\Models\LabelsEmails;

/**
 * 
 * 
 * @author Luis Josafat Heredia Contreras
 */
class LabelsEmailsSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        LabelsEmails::updateOrCreate([
            'name'=>'Particular'
        ]);
        
        LabelsEmails::updateOrCreate([
            'name'=>'Trabajo'
        ]);
        
    }
    
}
