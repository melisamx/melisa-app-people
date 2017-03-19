<?php namespace App\People\Database\Seeds\Modules\Universal\Colonies;

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
                'name'=>'Crear colonias',
                'url'=>"/forge.php/records/create/$connection/$database/colonies/create",
                'description'=>'Módulo para crear colonias',
                'task'=>[
                    'key'=>'task.people.colonies.create',
                    'name'=>'Acceso para crear colonias',
                    'description'=>'Permitir crear colonias',
                    'pattern'=>'create'
                ],
                'event'=>[
                    'key'=>'event.people.colonies.create.success',
                    'description'=>'Crear colonias'
                ]
            ],
        ]);
        
    }
    
}
