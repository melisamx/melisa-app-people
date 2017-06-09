<?php 

namespace App\People\Models;

use Melisa\Laravel\Models\BaseUuid;

/**
 * 
 * @author Luis Josafat Heredia Contreras
 */
abstract class PeopleFilesAbstract extends BaseUuid
{    
    protected $connection = 'people';
    protected $table = 'peopleFiles';
    public $timestamps = false;
    /* incrementing */
    protected $fillable = [
        'id',
        'idFileType',
        'idPeople',
        'idFile',
        'idIdentityCreated',
        'createdAt'
    ];    
}
