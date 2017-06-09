<?php 

namespace App\People\Models;

use Melisa\Laravel\Models\Base;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
abstract class StatesAbstract extends Base
{    
    protected $connection = 'people';
    protected $table = 'states';
    public $timestamps = false;
    public $incrementing = true;
    protected $fillable = [
        'id',
        'name'
    ];    
}
