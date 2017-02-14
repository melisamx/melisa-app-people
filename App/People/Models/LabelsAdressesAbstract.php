<?php namespace App\People\Models;

use Melisa\Laravel\Models\Base;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class LabelsAdressesAbstract extends Base
{
    
    protected $connection = 'people';
    
    protected $table = 'LabelsAdresses';
    
    protected $fillable = [
        'id', 'name'
    ];
    
    public $timestamps = false;
    
    public $incrementing = true;
    
}
