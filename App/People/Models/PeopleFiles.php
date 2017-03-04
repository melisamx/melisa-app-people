<?php namespace App\People\Models;

/**
 * 
 * @author Luis Josafat Heredia Contreras
 */
class PeopleFiles extends PeopleFilesAbstract
{
    
    public function type()
    {
        return $this->hasOne('App\People\Models\FilesTypes', 'id', 'idFileType');
    }
    
    public function file()
    {
        return $this->hasOne('App\Drive\Models\Files', 'id', 'idFile');
    }
    
}
