<?php 

namespace App\People\Models;

use Melisa\Laravel\Models\Base;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
abstract class PeopleLabelsAbstract extends Base
{    
    protected $connection = 'people';
    protected $table = 'peopleLabels';
    public $timestamps = false;
    public $incrementing = true;
    protected $fillable = [
        'id',
        'idPeople',
        'idLabel',
        'idIdentityCreated',
        'createdAt'
    ];    
}
