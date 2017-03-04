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
        'id', 'name', 'lastName', 'idBloodType', 'idIdentityCreated', 'sex', 'active', 'createdAt', 'idIdentityUpdated', 'updatedAt', 'nickname', 'birthday', 'nss', 'curp', 'rfc'
    ];
    
    public $timestamps = true;
    
    /* incrementing */
    
}
