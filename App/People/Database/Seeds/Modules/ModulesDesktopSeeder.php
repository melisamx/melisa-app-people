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
        
        $this->contacts();
        $this->labels();
        $this->states();
        $this->municipalities();
        
    }
    
    public function municipalities()
    {
        $this->call(Desktop\Municipalities\AddSeeder::class);
    }
    
    public function states()
    {
        $this->call(Desktop\States\AddSeeder::class);
        $this->call(Desktop\States\ViewSeeder::class);
    }
    
    public function contacts()
    {
        $this->call(Desktop\Contacts\ViewSeeder::class);
        $this->call(Desktop\Contacts\AddSeeder::class);
        $this->call(Desktop\Contacts\AddSimpleSeeder::class);
    }
    
    public function labels()
    {
        $this->call(Desktop\Labels\Contacts\ViewSeeder::class);
    }
    
}
