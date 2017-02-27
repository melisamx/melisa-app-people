<?php namespace App\People\Database\Seeds\Modules\Desktop\States;

use Melisa\Laravel\Database\InstallSeeder;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class ViewSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        $database = env('DB_DATABASE_APP');
        $connection = env('FORGE_CONNECTION');
        
        $this->installModule([
            [
                'name'=>'Estados',
                'url'=>"/forge.php/forms/$connection/$database/states/view/",
                'description'=>'Módulo interfaz para ver estados',
                'nameSpace'=>'Melisa.forge.view.desktop.form.view.Wrapper',
                'task'=>[
                    'key'=>'task.people.states.view.access',
                    'name'=>'Acceso a ver estados',
                    'description'=>'Permitir acceso a ver estados',
                    'pattern'=>'access'
                ],
                'option'=>[
                    'key'=>'option.people.states.view.access',
                    'name'=>'Opción para ver estados',
                    'text'=>'Estados'
                ],
                'event'=>[
                    'key'=>'event.people.states.view.access',
                    'description'=>'Acceso al módulo ver estados'
                ]
            ],
        ]);
        
    }
    
}
