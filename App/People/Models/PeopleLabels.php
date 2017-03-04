<?php namespace App\People\Models;

/**
 * 
 * @author Luis Josafat Heredia Contreras
 */
class PeopleLabels extends PeopleLabelsAbstract
{
    
    public function label()
    {
        return $this->hasOne('App\People\Models\Labels', 'id', 'idLabel');
    }
    
}
