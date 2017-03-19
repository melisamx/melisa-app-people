<?php namespace App\People\Database\Seeds\Data;

use Melisa\Laravel\Database\InstallSeeder;
use App\People\Models\Countries;

/**
 * 
 * 
 * @author Luis Josafat Heredia Contreras
 */
class CountriesSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        Countries::updateOrCreate([
            'name'=>'México'
        ]);
        
    }
    
}
