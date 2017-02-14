<?php namespace App\People\Database\Seeds\Data;

use Melisa\Laravel\Database\InstallSeeder;
use App\People\Models\LabelsContacts;

/**
 * 
 * 
 * @author Luis Josafat Heredia Contreras
 */
class LabelsContactsSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        LabelsContacts::updateOrCreate([
            'name'=>'Proveedores'
        ]);
        
        LabelsContacts::updateOrCreate([
            'name'=>'Clientes'
        ]);
        
    }
    
}
