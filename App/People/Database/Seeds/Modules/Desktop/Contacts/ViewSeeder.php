<?php namespace App\People\Database\Seeds\Modules\Desktop\Contacts;

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
                'name'=>'Ver contactos',
                'url'=>'/people.php/modules/contacts/view',
                'description'=>'Módulo interfaz para ver contactos',
                'nameSpace'=>'Melisa.people.view.desktop.contacts.view.Wrapper',
                'task'=>[
                    'key'=>'task.people.contacts.view.access',
                    'name'=>'Acceso a ver contactos',
                    'description'=>'Permitir acceso a ver contactos',
                    'pattern'=>'access'
                ],
                'option'=>[
                    'key'=>'option.people.contacts.view.access',
                    'name'=>'Opción para ver contactos',
                    'text'=>'Contactos',
                    'iconClassSmall'=>'x-fa fa fa-address-card-o',
                    'iconClassMedium'=>'x-fa fa fa-address-card-o',
                    'iconClassLarge'=>'x-fa fa fa-address-card-o',
                ],
                'menu'=>[
                    [
                        'key'=>'menu.people.contacts.view.access',
                        'name'=>'Menú crud de contactos',
                        'options'=>[
                            'option.people.contacts.add.access',
                            'option.people.contacts.update.access',
                            'option.people.contacts.remove.access',
                        ]
                    ]
                ],
                'event'=>[
                    'key'=>'event.people.contacts.view.access',
                    'description'=>'Acceso al módulo ver contactos'
                ]
            ],
        ]);
        
    }
    
}
