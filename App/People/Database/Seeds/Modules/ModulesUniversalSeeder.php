<?php

namespace App\People\Database\Seeds\Modules;

use Melisa\Laravel\Database\InstallSeeder;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class ModulesUniversalSeeder extends InstallSeeder
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
        $this->filesTypes();
        $this->contactsFiles();
        $this->countries();
        $this->colonies();        
        $this->settlements();
    }
    
    public function settlements()
    {
        $this->installModuleJson('Universal/Settlements', [
            'paging',
        ]);      
    }
    
    public function colonies()
    {
        $this->call(Universal\Colonies\PagingSeeder::class);        
        $this->call(Universal\Colonies\CreateSeeder::class);        
    }
    
    public function countries()
    {
        $this->installModuleJson('Universal/Countries', [
            'paging',
        ]);       
    }
    
    public function contactsFiles()
    {
        $this->call(Universal\Contacts\Files\PagingSeeder::class);        
    }
    
    public function filesTypes()
    {
        $this->call(Universal\FilesTypes\PagingSeeder::class);        
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
        $this->call(Universal\Contacts\DeleteSeeder::class);        
        $this->call(Universal\Contacts\UpdateSeeder::class);        
        $this->call(Universal\Contacts\ReportSeeder::class);        
    }
    
    public function labels()
    {
        $this->call(Universal\Labels\Contacts\PagingSeeder::class);
        $this->call(Universal\Labels\Emails\PagingSeeder::class);
        $this->call(Universal\Labels\PhoneNumbers\PagingSeeder::class);
        $this->call(Universal\Labels\Addresses\PagingSeeder::class);
        $this->call(Universal\Labels\People\PagingSeeder::class);        
    }
    
}
