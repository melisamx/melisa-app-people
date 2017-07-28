<?php

namespace App\People\Database\Seeds\Data;

use Melisa\Laravel\Database\InstallSeeder;

/**
 * 
 * 
 * @author Luis Josafat Heredia Contreras
 */
class CountriesSeeder extends InstallSeeder
{
    
    public function run()
    {
        $this->csvImportSimple([
            'countries'
        ]);        
    }
    
}
