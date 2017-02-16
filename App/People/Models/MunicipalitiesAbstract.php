<?php namespace App\People\Models;

use Melisa\Laravel\Models\Base;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class MunicipalitiesAbstract extends Base
{
    
    protected $connection = 'people';
    
    protected $table = 'municipalities';
    
    protected $fillable = [
        'id', 'idState', 'name'
    ];
    
    public $timestamps = false;
    
    public $incrementing = true;
    
}
