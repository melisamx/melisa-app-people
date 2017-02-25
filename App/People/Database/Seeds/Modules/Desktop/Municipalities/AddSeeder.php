<?php namespace App\People\Database\Seeds\Modules\Desktop\Municipalities;

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
                'name'=>'Agregar municipio',
                'url'=>"/forge.php/forms/$connection/$database/municipalities/add",
                'description'=>'Módulo interfaz para agregar municipio',
                'nameSpace'=>'Melisa.forge.view.desktop.form.add.Wrapper',
                'task'=>[
                    'key'=>'task.people.municipalities.add.access',
                    'name'=>'Acceso a agregar municipio',
                    'description'=>'Permitir acceso a agregar municipio',
                    'pattern'=>'access'
                ],
                'option'=>[
                    'key'=>'option.people.municipalities.add.access',
                    'name'=>'Opción para agregar municipio',
                    'text'=>'Agregar municipio'
                ],
                'event'=>[
                    'key'=>'event.people.municipalities.add.access',
                    'description'=>'Acceso al módulo agregar municipios'
                ]
            ],
        ]);
        
    }
    
}
