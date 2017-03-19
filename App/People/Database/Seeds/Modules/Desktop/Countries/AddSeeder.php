<?php namespace App\People\Database\Seeds\Modules\Desktop\Countries;

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
                'name'=>'Agregar país',
                'url'=>"/forge.php/forms/$connection/$database/countries/add",
                'description'=>'Módulo interfaz para agregar país',
                'nameSpace'=>'Melisa.forge.view.desktop.form.add.Wrapper',
                'task'=>[
                    'key'=>'task.people.countries.add.access',
                    'name'=>'Acceso a agregar país',
                    'description'=>'Permitir acceso a agregar país',
                    'pattern'=>'access'
                ],
                'option'=>[
                    'key'=>'option.people.countries.add.access',
                    'name'=>'Opción para agregar país',
                    'text'=>'Agregar país'
                ],
                'event'=>[
                    'key'=>'event.people.countries.add.access',
                    'description'=>'Acceso al módulo agregar país'
                ]
            ],
        ]);
        
    }
    
}
