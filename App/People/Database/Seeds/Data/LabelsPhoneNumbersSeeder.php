<?php namespace App\People\Database\Seeds\Data;

use Melisa\Laravel\Database\InstallSeeder;
use App\People\Models\LabelsPhoneNumbers;

/**
 * 
 * 
 * @author Luis Josafat Heredia Contreras
 */
class LabelsPhoneNumbersSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        LabelsPhoneNumbers::updateOrCreate([
            'name'=>'Hogar'
        ]);
        
        LabelsPhoneNumbers::updateOrCreate([
            'name'=>'Trabajo'
        ]);
        
        LabelsPhoneNumbers::updateOrCreate([
            'name'=>'Otro'
        ]);
        
        LabelsPhoneNumbers::updateOrCreate([
            'name'=>'Dispositivo móvil'
        ]);
        
        LabelsPhoneNumbers::updateOrCreate([
            'name'=>'Principal'
        ]);
        
    }
    
}
