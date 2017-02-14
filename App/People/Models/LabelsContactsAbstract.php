<?php namespace App\People\Models;

use Melisa\Laravel\Models\Base;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class LabelsContactsAbstract extends Base
{
    
    protected $connection = 'people';
    
    protected $table = 'LabelsContacts';
    
    protected $fillable = [
        'id', 'name', 'key', 'createdAt'
    ];
    
    public $timestamps = false;
    
    public $incrementing = true;
    
}
