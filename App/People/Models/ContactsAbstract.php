<?php namespace App\People\Models;

use Melisa\Laravel\Models\BaseUuid;

/**
 * 
 * @author Luis Josafat Heredia Contreras
 */
abstract class ContactsAbstract extends BaseUuid
{
    
    protected $connection = 'people';
    
    protected $table = 'Contacts';
    
    protected $fillable = [
        'id', 'idPhoneNumber', 'idPeople', 'idEmail', 'idIdentityCreated', 'active', 'createdAt', 'idIdentityUpdated', 'updatedAt'
    ];
    
    public $timestamps = true;
    
    /* incrementing */
    
}
