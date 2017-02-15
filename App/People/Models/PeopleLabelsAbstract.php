<?php namespace App\People\Models;

use Melisa\Laravel\Models\Base;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class PeopleLabelsAbstract extends Base
{
    
    protected $connection = 'people';
    
    protected $table = 'peopleLabels';
    
    protected $fillable = [
        'id', 'idLabel', 'idPeople', 'idIdentityCreated', 'createdAt'
    ];
    
    public $timestamps = false;
    
    public $incrementing = true;
    
}
