<?php namespace App\People\Database\Seeds\Modules\Desktop\Labels\Contacts;

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
                'name'=>'Ver etiquetas de contactos',
                'url'=>'/people.php/modules/labelsContacts/view',
                'description'=>'Módulo interfaz para ver etiquetas de contactos',
                'nameSpace'=>'Melisa.people.view.desktop.labels.contacts.view.Wrapper',
                'task'=>[
                    'key'=>'task.people.labels.contacts.view.access',
                    'name'=>'Acceso a ver etiquetas de contactos',
                    'description'=>'Permitir acceso a ver etiquetas de contactos',
                    'pattern'=>'access'
                ],
                'option'=>[
                    'key'=>'option.people.labels.contacts.view.access',
                    'name'=>'Opción para ver etiquetas de contactos',
                    'text'=>'Etiquetas',
                    'iconClassSmall'=>'x-fa fa fa-tags',
                    'iconClassMedium'=>'x-fa fa fa-tags',
                    'iconClassLarge'=>'x-fa fa fa-tags',
                ],
                'menu'=>[
                    [
                        'key'=>'menu.people.labels.contacts.view.access',
                        'name'=>'Menú crud de etiquetas de contactos',
                        'options'=>[
                            'option.people.labels.contacts.add.access',
                            'option.people.labels.contacts.update.access',
                            'option.people.labels.contacts.remove.access',
                        ]
                    ]
                ]
            ],
        ]);
        
    }
    
}
