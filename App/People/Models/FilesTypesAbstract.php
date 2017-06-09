<?php 

namespace App\People\Models;

use Melisa\Laravel\Models\Base;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
abstract class FilesTypesAbstract extends Base
{    
    protected $connection = 'people';
    protected $table = 'filesTypes';
    public $timestamps = false;
    public $incrementing = true;
    protected $fillable = [
        'id',
        'name'
    ];    
}
