<?php namespace App\People\Database\Seeds;

use Melisa\Laravel\Database\InstallSeeder;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class ApplicationSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        $this->installApplication('people', [
            'name'=>'People',
            'description'=>'Application People',
            'nameSpace'=>'Melisa.people',
            'typeSecurity'=>'art',
            'version'=>'1.1.2'
        ]);
        
    }
    
}
