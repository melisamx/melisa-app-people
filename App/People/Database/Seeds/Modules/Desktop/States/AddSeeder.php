<?php namespace App\People\Database\Seeds\Modules\Desktop\States;

use Melisa\Laravel\Database\InstallSeeder;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class AddSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        $database = env('DB_DATABASE_APP');
        $connection = env('FORGE_CONNECTION');
        
        $this->installModule([
            [
                'name'=>'Agregar estado',
                'url'=>"/forge.php/forms/$connection/$database/states/add",
                'description'=>'Módulo interfaz para agregar estado',
                'nameSpace'=>'Melisa.forge.view.desktop.form.add.Wrapper',
                'task'=>[
                    'key'=>'task.people.states.add.access',
                    'name'=>'Acceso a agregar estado',
                    'description'=>'Permitir acceso a agregar estado',
                    'pattern'=>'access'
                ],
                'option'=>[
                    'key'=>'option.people.states.add.access',
                    'name'=>'Opción para agregar estado',
                    'text'=>'Agregar estado'
                ],
                'event'=>[
                    'key'=>'event.people.states.add.access',
                    'description'=>'Acceso al módulo agregar estados'
                ]
            ],
        ]);
        
    }
    
}
