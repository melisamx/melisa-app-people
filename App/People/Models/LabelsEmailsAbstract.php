<?php namespace App\People\Models;

use Melisa\Laravel\Models\Base;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class LabelsEmailsAbstract extends Base
{
    
    protected $connection = 'people';
    
    protected $table = 'LabelsEmails';
    
    protected $fillable = [
        'id', 'name'
    ];
    
    public $timestamps = false;
    
    public $incrementing = true;
    
}
