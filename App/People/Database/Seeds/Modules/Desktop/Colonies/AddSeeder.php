<?php namespace App\People\Database\Seeds\Modules\Desktop\Colonies;

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
                'name'=>'Agregar colonia',
                'url'=>"/forge.php/forms/$connection/$database/colonies/add",
                'description'=>'Módulo interfaz para agregar colonia',
                'nameSpace'=>'Melisa.forge.view.desktop.form.add.Wrapper',
                'task'=>[
                    'key'=>'task.people.colonies.add.access',
                    'name'=>'Acceso a agregar colonia',
                    'description'=>'Permitir acceso a agregar colonia',
                    'pattern'=>'access'
                ],
                'option'=>[
                    'key'=>'option.people.colonies.add.access',
                    'name'=>'Opción para agregar colonia',
                    'text'=>'Agregar colonia'
                ],
                'event'=>[
                    'key'=>'event.people.colonies.add.access',
                    'description'=>'Acceso al módulo agregar colonias'
                ]
            ],
        ]);
        
    }
    
}
