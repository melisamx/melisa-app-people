<?php namespace App\People\Models;

use Melisa\Laravel\Models\BaseUuid;

/**
 * 
 * @author Luis Josafat Heredia Contreras
 */
abstract class PeopleAbstract extends BaseUuid
{
    
    protected $connection = 'people';
    
    protected $table = 'people';
    
    protected $fillable = [
        'id', 'name', 'firstName', 'lastName', 'idBloobType', 'nickname', 'gender', 'createdAt', 'birthday', 'updatedAt', 'idIdentityCreated', 'sex', 'active', 'idIdentityUpdated'
    ];
    
    public $timestamps = true;
    
    /* incrementing */
    
}
