<?php namespace App\People\Models;

use Melisa\Laravel\Models\Base;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class CountriesAbstract extends Base
{
    
    protected $connection = 'people';
    
    protected $table = 'countries';
    
    protected $fillable = [
        'id', 'name'
    ];
    
    public $timestamps = false;
    
    public $incrementing = true;
    
}
