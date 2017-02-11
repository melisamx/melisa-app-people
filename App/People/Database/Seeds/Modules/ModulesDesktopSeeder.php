<?php namespace App\People\Database\Seeds\Modules;

use Illuminate\Database\Seeder;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class ModulesDesktopSeeder extends Seeder
{
    
    public function run()
    {
        
        $this->call(Desktop\Contacts\ViewSeeder::class);
        $this->call(Desktop\Labels\Contacts\ViewSeeder::class);
        
    }
    
}
