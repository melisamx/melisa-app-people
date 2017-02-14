<?php namespace App\People\Models;

use Melisa\Laravel\Models\BaseUuid;

/**
 * 
 * @author Luis Josafat Heredia Contreras
 */
abstract class PeopleAbstract extends BaseUuid
{
    
    protected $connection = 'people';
    
    protected $table = 'People';
    
    protected $fillable = [
        'id', 'name', 'lastName', 'idIdentityCreated', 'nickname', 'sex', 'active', 'createdAt', 'idIdentityUpdated', 'updatedAt', 'birthday'
    ];
    
    public $timestamps = true;
    
    /* incrementing */
    
}
