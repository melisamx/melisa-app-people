<?php namespace App\People\Database\Seeds\Data;

use Melisa\Laravel\Database\InstallSeeder;
use App\People\Models\LabelsTypes;

/**
 * 
 * 
 * @author Luis Josafat Heredia Contreras
 */
class LabelsTypesSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        LabelsTypes::updateOrCreate([
            'name'=>'Correos electrónicos'
        ]);
        
        LabelsTypes::updateOrCreate([
            'name'=>'Números de teléfono'
        ]);
        
        LabelsTypes::updateOrCreate([
            'name'=>'Domicilios'
        ]);
        
        LabelsTypes::updateOrCreate([
            'name'=>'Contactos'
        ]);
        
    }
    
}
