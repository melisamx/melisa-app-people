<?php 

namespace App\People\Models;

use Melisa\Laravel\Models\BaseUuid;

/**
 * 
 * @author Luis Josafat Heredia Contreras
 */
abstract class PeoplePhoneNumbersAbstract extends BaseUuid
{    
    protected $connection = 'people';
    protected $table = 'peoplePhoneNumbers';
    public $timestamps = true;
    /* incrementing */
    protected $fillable = [
        'id',
        'number',
        'idLabel',
        'idPeople',
        'idIdentityCreated',
        'active',
        'isPrimary',
        'createdAt',
        'idIdentityUpdated',
        'updatedAt'
    ];    
}
