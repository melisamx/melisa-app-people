<?php namespace App\People\Database\Seeds\Modules\Desktop\Labels;

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
        
        $this->installModule([
            [
                'name'=>'Ver etiquetas',
                'url'=>'/people.php/modules/labels/view',
                'description'=>'Módulo interfaz para ver etiquetas',
                'nameSpace'=>'Melisa.people.view.desktop.labels.view.Wrapper',
                'task'=>[
                    'key'=>'task.people.labels.view.access',
                    'name'=>'Acceso a ver etiquetas de people',
                    'description'=>'Permitir acceso a ver etiquetas',
                    'pattern'=>'access'
                ],
                'option'=>[
                    'key'=>'option.people.labels.view.access',
                    'name'=>'Opción para ver etiquetas',
                    'text'=>'Etiquetas',
                    'iconClassSmall'=>'x-fa fa fa-address-card-o',
                    'iconClassMedium'=>'x-fa fa fa-address-card-o',
                    'iconClassLarge'=>'x-fa fa fa-address-card-o',
                ],
                'menu'=>[
                    [
                        'key'=>'menu.people.labels.view.access',
                        'name'=>'Menú crud de labels',
                        'options'=>[
                            'option.people.labels.add.access',
                            'option.people.labels.update.access',
                            'option.people.labels.remove.access',
                        ]
                    ]
                ]
            ],
        ]);
        
    }
    
}
