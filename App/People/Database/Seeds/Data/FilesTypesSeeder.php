<?php namespace App\People\Database\Seeds\Data;

use Melisa\Laravel\Database\InstallSeeder;
use App\People\Models\FilesTypes;

/**
 * 
 * 
 * @author Luis Josafat Heredia Contreras
 */
class FilesTypesSeeder extends InstallSeeder
{
    
    public function run()
    {
                
        FilesTypes::updateOrCreate([
            'name'=>'IFE'
        ]);
                
        FilesTypes::updateOrCreate([
            'name'=>'CURP'
        ]);
                
        FilesTypes::updateOrCreate([
            'name'=>'LICENCIA DE CONDUCIR'
        ]);
        
    }
    
}
