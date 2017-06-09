<?php 

namespace App\People\Models;

use Melisa\Laravel\Models\BaseUuid;

/**
 * 
 * @author Luis Josafat Heredia Contreras
 */
abstract class LabelsAbstract extends BaseUuid
{    
    protected $connection = 'people';
    protected $table = 'labels';
    public $timestamps = true;
    /* incrementing */
    protected $fillable = [
        'id',
        'idLabelType',
        'name',
        'key',
        'idIdentityCreated',
        'active',
        'createdAt',
        'updatedAt'
    ];    
}
