<?php namespace App\People\Database\Seeds\Modules;

use Illuminate\Database\Seeder;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class ModulesUniversalSeeder extends Seeder
{
    
    public function run()
    {
        
        $this->call(Universal\Contacts\PagingSeeder::class);
        $this->call(Universal\Labels\Contacts\PagingSeeder::class);
        
    }
    
}
