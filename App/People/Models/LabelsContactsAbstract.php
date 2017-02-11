<?php namespace App\People\Models;

use Melisa\Laravel\Models\BaseUuid;

/**
 * 
 * @author Luis Josafat Heredia Contreras
 */
abstract class LabelsContactsAbstract extends BaseUuid
{
    
    protected $connection = 'people';
    
    protected $table = 'LabelsContacts';
    
    protected $fillable = [
        'id', 'name', 'key', 'createdAt'
    ];
    
    public $timestamps = false;
    
    /* incrementing */
    
}
