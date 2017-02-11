<?php namespace App\People\Models;

use Melisa\Laravel\Models\BaseUuid;

/**
 * 
 * @author Luis Josafat Heredia Contreras
 */
abstract class ContactsLabelsAbstract extends BaseUuid
{
    
    protected $connection = 'people';
    
    protected $table = 'ContactsLabels';
    
    protected $fillable = [
        'id', 'idContact', 'idLabelContact'
    ];
    
    public $timestamps = false;
    
    /* incrementing */
    
}
