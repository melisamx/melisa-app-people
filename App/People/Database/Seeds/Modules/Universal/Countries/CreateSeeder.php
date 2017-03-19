<?php namespace App\People\Database\Seeds\Modules\Universal\Countries;

use Melisa\Laravel\Database\InstallSeeder;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class CreateSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        $database = env('DB_DATABASE_APP');
        $connection = env('FORGE_CONNECTION');
        
        $this->installModule([
            [
                'name'=>'Crear ciudad',
                'url'=>"/forge.php/records/create/$connection/$database/countries/create",
                'description'=>'Módulo para crear ciudad',
                'task'=>[
                    'key'=>'task.people.countries.create',
                    'name'=>'Acceso para crear ciudad',
                    'description'=>'Permitir crear ciudad',
                    'pattern'=>'create'
                ],
                'event'=>[
                    'key'=>'event.people.countries.create.success',
                    'description'=>'Crear ciudad'
                ]
            ],
        ]);
        
    }
    
}
