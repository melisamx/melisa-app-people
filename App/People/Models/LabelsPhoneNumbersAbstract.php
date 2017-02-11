<?php namespace App\People\Models;

use Melisa\Laravel\Models\Base;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class LabelsPhoneNumbersAbstract extends Base
{
    
    protected $connection = 'people';
    
    protected $table = 'LabelsPhoneNumbers';
    
    protected $fillable = [
        'id', 'name'
    ];
    
    public $timestamps = false;
    
    /* incrementing */
    
}
