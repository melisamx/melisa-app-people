<?php namespace App\People\Models;

use Melisa\Laravel\Models\BaseUuid;

/**
 * 
 * @author Luis Josafat Heredia Contreras
 */
abstract class LabelsAbstract extends BaseUuid
{
    
    protected $connection = 'people';
    
    protected $table = 'labels';
    
    protected $fillable = [
        'id', 'name', 'key', 'idLabelType', 'idIdentityCreated', 'active', 'createdAt', 'updatedAt'
    ];
    
    public $timestamps = true;
    
    /* incrementing */
    
}
