<?php 

namespace App\People\Models;

use Melisa\Laravel\Models\Base;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
abstract class MunicipalitiesAbstract extends Base
{    
    protected $connection = 'people';
    protected $table = 'municipalities';
    public $timestamps = false;
    public $incrementing = true;
    protected $fillable = [
        'id',
        'idState',
        'name'
    ];    
}
