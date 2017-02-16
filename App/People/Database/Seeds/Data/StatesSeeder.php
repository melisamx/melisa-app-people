<?php namespace App\People\Database\Seeds\Data;

use Melisa\Laravel\Database\InstallSeeder;
use App\People\Models\States;

/**
 * 
 * 
 * @author Luis Josafat Heredia Contreras
 */
class StatesSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        States::updateOrCreate([
            'name'=>'Colima'
        ]);
        
        States::updateOrCreate([
            'name'=>'Jalisco'
        ]);
        
    }
    
}
