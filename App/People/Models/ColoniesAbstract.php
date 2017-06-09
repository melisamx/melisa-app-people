<?php 

namespace App\People\Models;

use Melisa\Laravel\Models\Base;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
abstract class ColoniesAbstract extends Base
{    
    protected $connection = 'people';
    protected $table = 'colonies';
    public $timestamps = false;
    public $incrementing = true;
    protected $fillable = [
        'id',
        'name'
    ];    
}
