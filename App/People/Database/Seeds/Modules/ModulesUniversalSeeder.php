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
        $this->contactsEmails();
        $this->contactsPhoneNumbers();
        $this->states();
        $this->municipalities();
        $this->bloodTypes();
        
    }
    
    public function contactsPhoneNumbers()
    {
        $this->call(Universal\Contacts\PhoneNumbers\PagingSeeder::class);        
    }
    
    public function contactsEmails()
    {
        $this->call(Universal\Contacts\Emails\PagingSeeder::class);        
    }
    
    public function bloodTypes()
    {
        $this->call(Universal\BloodTypes\PagingSeeder::class);        
    }
    
    public function states()
    {
        $this->call(Universal\States\PagingSeeder::class);        
        $this->call(Universal\States\CreateSeeder::class);        
    }
    
    public function municipalities()
    {
        $this->call(Universal\Municipalities\PagingSeeder::class);        
    }
    
    public function contacts()
    {
        $this->call(Universal\Contacts\PagingSeeder::class);        
        $this->call(Universal\Contacts\CreateSeeder::class);        
        $this->call(Universal\Contacts\CreateSimpleSeeder::class);        
    }
    
    public function labels()
    {
        $this->call(Universal\Labels\Contacts\PagingSeeder::class);
        $this->call(Universal\Labels\Emails\PagingSeeder::class);
        $this->call(Universal\Labels\PhoneNumbers\PagingSeeder::class);
        $this->call(Universal\Labels\Addresses\PagingSeeder::class);
        
    }
    
}
