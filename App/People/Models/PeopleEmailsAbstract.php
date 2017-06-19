<?php 

namespace App\People\Models;

use Melisa\Laravel\Models\Base;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
abstract class PeopleEmailsAbstract extends Base
{    
    protected $connection = 'people';
    protected $table = 'peopleEmails';
    public $timestamps = true;
    public $incrementing = true;
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
