<?php namespace App\People\Database\Seeds\Data;

use Melisa\Laravel\Database\InstallSeeder;
use App\People\Models\Municipalities;
use App\People\Models\States;

/**
 * 
 * 
 * @author Luis Josafat Heredia Contreras
 */
class MunicipalitiesSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        $this->stateColima();
        
    }
    
    public function stateColima()
    {
        
        $idState = $this->findState('Colima')->id;
        
        Municipalities::updateOrCreate([
            'idState'=>$idState,
            'name'=>'Armería'
        ]);
        
        Municipalities::updateOrCreate([
            'idState'=>$idState,
            'name'=>'Colima'
        ]);
        
        Municipalities::updateOrCreate([
            'idState'=>$idState,
            'name'=>'Comala'
        ]);
        
        Municipalities::updateOrCreate([
            'idState'=>$idState,
            'name'=>'Cuauhtémoc'
        ]);
        
        Municipalities::updateOrCreate([
            'idState'=>$idState,
            'name'=>'Ixtlahuacán'
        ]);
        
        Municipalities::updateOrCreate([
            'idState'=>$idState,
            'name'=>'Manzanillo'
        ]);
        
        Municipalities::updateOrCreate([
            'idState'=>$idState,
            'name'=>'Minatitlán'
        ]);
        
        Municipalities::updateOrCreate([
            'idState'=>$idState,
            'name'=>'Tecomán'
        ]);
        
        Municipalities::updateOrCreate([
            'idState'=>$idState,
            'name'=>'Villa de Álvarez'
        ]);
    }
    
    public function findState($name)
    {        
        return States::where('name', $name)->first();                
    }
    
}
