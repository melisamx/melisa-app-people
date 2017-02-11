<?php namespace App\People\Models;

use Melisa\Laravel\Models\BaseUuid;

/**
 * 
 * @author Luis Josafat Heredia Contreras
 */
abstract class ContactsPhoneNumbersAbstract extends BaseUuid
{
    
    protected $connection = 'people';
    
    protected $table = 'ContactsPhoneNumbers';
    
    protected $fillable = [
        'id', 'idContact', 'idLabelPhoneNumber', 'idPhoneNumber'
    ];
    
    public $timestamps = false;
    
    /* incrementing */
    
}
