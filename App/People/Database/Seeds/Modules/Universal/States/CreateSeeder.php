<?php namespace App\People\Database\Seeds\Modules\Universal\States;

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
                'name'=>'Crear estado',
                'url'=>"/forge.php/records/create/$connection/$database/states/create",
                'description'=>'Módulo para crear estado',
                'task'=>[
                    'key'=>'task.people.states.create',
                    'name'=>'Acceso para crear estado',
                    'description'=>'Permitir crear estado',
                    'pattern'=>'create'
                ],
                'event'=>[
                    'key'=>'event.people.states.create.success',
                    'description'=>'Crear estado'
                ]
            ],
        ]);
        
    }
    
}
