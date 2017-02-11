<?php namespace App\People\Models;

use Melisa\Laravel\Models\BaseUuid;

/**
 * 
 * @author Luis Josafat Heredia Contreras
 */
abstract class PhoneNumbersAbstract extends BaseUuid
{
    
    protected $connection = 'people';
    
    protected $table = 'PhoneNumbers';
    
    protected $fillable = [
        'id', 'number', 'idIdentityCreated', 'active', 'createdAt', 'idIdentityUpdated', 'updatedAt'
    ];
    
    public $timestamps = true;
    
    /* incrementing */
    
}
