<?php 

namespace App\People\Models;

use Melisa\Laravel\Models\BaseUuid;

/**
 * 
 * @author Luis Josafat Heredia Contreras
 */
abstract class PeopleEmailsAbstract extends BaseUuid
{    
    protected $connection = 'people';
    protected $table = 'peopleEmails';
    public $timestamps = true;
    /* incrementing */
    protected $fillable = [
        'id',
        'email',
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
