<?php 

namespace App\People\Models;

use Melisa\Laravel\Models\BaseUuid;

/**
 * 
 * @author Luis Josafat Heredia Contreras
 */
abstract class PeopleLabelsAbstract extends BaseUuid
{    
    protected $connection = 'people';
    protected $table = 'peopleLabels';
    public $timestamps = false;
    /* incrementing */
    protected $fillable = [
        'id',
        'idPeople',
        'idLabel',
        'idIdentityCreated',
        'createdAt'
    ];    
}
