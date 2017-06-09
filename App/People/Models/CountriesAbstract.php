<?php 

namespace App\People\Models;

use Melisa\Laravel\Models\Base;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
abstract class CountriesAbstract extends Base
{    
    protected $connection = 'people';
    protected $table = 'countries';
    public $timestamps = false;
    public $incrementing = true;
    protected $fillable = [
        'id',
        'name'
    ];    
}
