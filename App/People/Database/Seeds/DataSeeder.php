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
        
        $this->call(Data\LabelsEmailsSeeder::class);
        $this->call(Data\LabelsPhoneNumbersSeeder::class);
        $this->call(Data\LabelsContactsSeeder::class);
        
    }
    
}
