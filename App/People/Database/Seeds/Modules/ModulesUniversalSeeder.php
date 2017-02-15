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
        
        $this->labels();
        $this->contacts();
        
    }
    
    public function contacts()
    {
        $this->call(Universal\Contacts\PagingSeeder::class);        
    }
    
    public function labels()
    {
        $this->call(Universal\Labels\Contacts\PagingSeeder::class);
        $this->call(Universal\Labels\Emails\PagingSeeder::class);
        $this->call(Universal\Labels\PhoneNumbers\PagingSeeder::class);
        
    }
    
}
