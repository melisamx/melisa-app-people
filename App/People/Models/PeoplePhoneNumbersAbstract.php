<?php namespace App\People\Models;

use Melisa\Laravel\Models\BaseUuid;

/**
 * 
 * @author Luis Josafat Heredia Contreras
 */
abstract class PeoplePhoneNumbersAbstract extends BaseUuid
{
    
    protected $connection = 'people';
    
    protected $table = 'peoplePhoneNumbers';
    
    protected $fillable = [
        'id', 'number', 'idLabel', 'idPeople', 'idIdentityCreated', 'active', 'isPrimary', 'createdAt', 'idIdentityUpdated', 'updatedAt'
    ];
    
    public $timestamps = true;
    
    /* incrementing */
    
}
