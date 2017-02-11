<?php namespace App\People\Models;

use Melisa\Laravel\Models\BaseUuid;

/**
 * 
 * @author Luis Josafat Heredia Contreras
 */
abstract class ContactsEmailsAbstract extends BaseUuid
{
    
    protected $connection = 'people';
    
    protected $table = 'ContactsEmails';
    
    protected $fillable = [
        'id', 'idContact', 'idEmail', 'idLabelEmail'
    ];
    
    public $timestamps = false;
    
    /* incrementing */
    
}
