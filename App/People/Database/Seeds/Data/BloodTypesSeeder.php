<?php namespace App\People\Database\Seeds\Data;

use Melisa\Laravel\Database\InstallSeeder;
use App\People\Models\BloodTypes;

/**
 * 
 * 
 * @author Luis Josafat Heredia Contreras
 */
class BloodTypesSeeder extends InstallSeeder
{
    
    public function run()
    {
                
        BloodTypes::updateOrCreate([
            'name'=>'O positivo'
        ]);
                
        BloodTypes::updateOrCreate([
            'name'=>'A negativo'
        ]);
                
        BloodTypes::updateOrCreate([
            'name'=>'A positivo'
        ]);
                
        BloodTypes::updateOrCreate([
            'name'=>'B negativo'
        ]);
                
        BloodTypes::updateOrCreate([
            'name'=>'B positivo'
        ]);
                
        BloodTypes::updateOrCreate([
            'name'=>'AB negativo'
        ]);
                
        BloodTypes::updateOrCreate([
            'name'=>'AB positivo'
        ]);
        
    }
    
}
