<?php namespace App\People\Models;

/**
 * 
 * @author Luis Josafat Heredia Contreras
 */
class People extends PeopleAbstract
{
    
    public function emails()
    {
        return $this->hasMany('App\People\Models\PeopleEmails', 'idPeople', 'id');
    }
    
    public function labels()
    {
        return $this->hasMany('App\People\Models\PeopleLabels', 'idPeople', 'id');
    }
    
    public function phoneNumbers()
    {
        return $this->hasMany('App\People\Models\PeoplePhoneNumbers', 'idPeople', 'id');
    }
    
    public function phoneEmails()
    {
        return $this->hasMany('App\People\Models\PeopleEmails', 'idPeople', 'id');
    }
    
    public function adresses()
    {
        return $this->hasMany('App\People\Models\PeopleAddresses', 'idPeople', 'id');
    }
    
}
