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
        $this->states();
        $this->municipalities();
        
    }
    
    public function states()
    {
        $this->call(Universal\States\PagingSeeder::class);        
    }
    
    public function municipalities()
    {
        $this->call(Universal\Municipalities\PagingSeeder::class);        
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
        $this->call(Universal\Labels\Addresses\PagingSeeder::class);
        
    }
    
}
