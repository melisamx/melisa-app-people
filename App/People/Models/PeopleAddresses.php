<?php namespace App\People\Models;

/**
 * 
 * @author Luis Josafat Heredia Contreras
 */
class PeopleAddresses extends PeopleAddressesAbstract
{
    
    public function label()
    {
        return $this->hasOne('App\People\Models\Labels', 'id', 'idLabel');
    }
    
    public function state()
    {
        return $this->hasOne('App\People\Models\States', 'id', 'idState');
    }
    
    public function municipality()
    {
        return $this->hasOne('App\People\Models\Municipalities', 'id', 'idMunicipality');
    }
    
}
