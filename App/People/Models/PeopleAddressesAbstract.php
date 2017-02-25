<?php namespace App\People\Models;

use Melisa\Laravel\Models\BaseUuid;

/**
 * 
 * @author Luis Josafat Heredia Contreras
 */
abstract class PeopleAddressesAbstract extends BaseUuid
{
    
    protected $connection = 'people';
    
    protected $table = 'peopleAddresses';
    
    protected $fillable = [
        'id', 'idLabel', 'idMunicipality', 'idPeople', 'idState', 'idIdentityCreated', 'createdAt', 'idIdentityUpdated', 'street', 'colony', 'postalCode', 'updatedAt'
    ];
    
    public $timestamps = true;
    
    /* incrementing */
    
}
