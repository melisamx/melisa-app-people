<?php namespace App\People\Models;

use Melisa\Laravel\Models\Base;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class LabelsTypesAbstract extends Base
{
    
    protected $connection = 'people';
    
    protected $table = 'labelsTypes';
    
    protected $fillable = [
        'id', 'name'
    ];
    
    public $timestamps = false;
    
    public $incrementing = true;
    
}
