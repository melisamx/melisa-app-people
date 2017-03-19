<?php namespace App\People\Models;

use Melisa\Laravel\Models\Base;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class ColoniesAbstract extends Base
{
    
    protected $connection = 'people';
    
    protected $table = 'colonies';
    
    protected $fillable = [
        'id', 'name'
    ];
    
    public $timestamps = false;
    
    /* incrementing */
    
}
