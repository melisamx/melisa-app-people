<?php 

namespace App\People\Models;

use Melisa\Laravel\Models\BaseUuid;

/**
 * 
 * @author Luis Josafat Heredia Contreras
 */
abstract class PeopleAddressesAbstract extends BaseUuid
{    
    protected $connection = 'people';
    protected $table = 'peopleAddresses';
    public $timestamps = true;
    /* incrementing */
    protected $fillable = [
        'id',
        'idLabel',
        'idMunicipality',
        'idPeople',
        'idState',
        'idIdentityCreated',
        'isPrimary',
        'createdAt',
        'idIdentityUpdated',
        'street',
        'colony',
        'postalCode',
        'updatedAt'
    ];    
}
