<?php namespace App\People\Database\Seeds\Data;

use Melisa\Laravel\Database\InstallSeeder;
use App\People\Models\Labels;
use App\People\Models\LabelsTypes;

/**
 * 
 * 
 * @author Luis Josafat Heredia Contreras
 */
class LabelsSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        $this->labelsEmails();
        $this->labelsPhoneNumbers();
        $this->labelsContacts();
        $this->labelsAdresses();
        
    }
    
    public function labelsAdresses()
    {
        
        $this->createLabel('Particular', 'Domicilios');
        $this->createLabel('Trabajo', 'Domicilios');
        $this->createLabel('Otro', 'Domicilios');
        
    }
    
    public function labelsContacts()
    {
        
        $this->createLabel('Proveedores', 'Contactos');
        $this->createLabel('Transportistas', 'Contactos');
        $this->createLabel('Clientes', 'Contactos');
        
    }
    
    public function labelsPhoneNumbers()
    {
        
        $this->createLabel('Hogar', 'Números de teléfono');
        $this->createLabel('Trabajo', 'Números de teléfono');
        $this->createLabel('Otro', 'Números de teléfono');
        $this->createLabel('Principal', 'Números de teléfono');
        $this->createLabel('Dispositivo Móvil', 'Números de teléfono');
        
    }
    
    public function labelsEmails()
    {
        
        $this->createLabel('Particular', 'Correos electrónicos');
        $this->createLabel('Trabajo', 'Correos electrónicos');
        $this->createLabel('Otro', 'Correos electrónicos');
        
    }
    
    public function createLabel($name, $type)
    {
        
        $labelType = LabelsTypes::where('name', $type)->first();
        $identity = $this->findIdentity();
        
        Labels::updateOrCreate([
            'idLabelType'=>$labelType->id,
            'name'=>$name
        ], [
            'idIdentityCreated'=>$identity->id,
            'key'=>str_slug($name)
        ]);
        
    }
    
}
