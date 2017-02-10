<?php namespace App\People\Database\Seeds;

use Melisa\Laravel\Database\InstallSeeder;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class OptionsSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        $this->installOption('option.people.access', [
            'name'=>'Option main de aplicación people',
            'text'=>'People',
            'isSubMenu'=>true,
            'iconClassSmall'=>'x-fa fa fa-users',
            'iconClassMedium'=>'x-fa fa fa-users',
            'iconClassLarge'=>'x-fa fa fa-users',
        ]);
        
    }
    
}
