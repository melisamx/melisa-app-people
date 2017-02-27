<?php namespace App\People\Models;

use Melisa\Laravel\Models\Base;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class FilesTypesAbstract extends Base
{
    
    protected $connection = 'people';
    
    protected $table = 'filesTypes';
    
    protected $fillable = [
        'id', 'name'
    ];
    
    public $timestamps = false;
    
    /* incrementing */
    
}
