<?php namespace App\People\Database\Seeds;

use Melisa\Laravel\Database\InstallSeeder;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class DataSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        $this->call(Data\LabelsTypesSeeder::class);
        $this->call(Data\LabelsSeeder::class);
        
    }
    
}
