<?php namespace App\People\Models;

/**
 * 
 * @author Luis Josafat Heredia Contreras
 */
class PeoplePhoneNumbers extends PeoplePhoneNumbersAbstract
{
    
    public function label()
    {
        return $this->hasOne('App\People\Models\Labels', 'id', 'idLabel');
    }
    
}
