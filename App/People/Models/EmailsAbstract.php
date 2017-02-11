<?php namespace App\People\Models;

use Melisa\Laravel\Models\BaseUuid;

/**
 * 
 * @author Luis Josafat Heredia Contreras
 */
abstract class EmailsAbstract extends BaseUuid
{
    
    protected $connection = 'people';
    
    protected $table = 'Emails';
    
    protected $fillable = [
        'id', 'email', 'idIdentityCreated', 'active', 'createdAt', 'updatedAt', 'idIdentityUpdated'
    ];
    
    public $timestamps = true;
    
    /* incrementing */
    
}
