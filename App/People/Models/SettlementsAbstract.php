<?php 

namespace App\People\Models;

use Melisa\Laravel\Models\Base;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
abstract class SettlementsAbstract extends Base
{    
    protected $connection = 'people';
    protected $table = 'settlements';
    public $timestamps = false;
    public $incrementing = true;
    protected $fillable = [
        'id',
        'postalCode',
        'idMunicipality',
        'settlement',
        'idTypeSettlement'
    ];    
}
