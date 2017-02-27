<?php namespace App\People\Models;

use Melisa\Laravel\Models\BaseUuid;

/**
 * 
 * @author Luis Josafat Heredia Contreras
 */
abstract class PeopleFilesAbstract extends BaseUuid
{
    
    protected $connection = 'people';
    
    protected $table = 'peopleFiles';
    
    protected $fillable = [
        'id', 'idFileType', 'idPeople', 'idFile', 'idIdentityCreated', 'createdAt'
    ];
    
    public $timestamps = false;
    
    /* incrementing */
    
}
