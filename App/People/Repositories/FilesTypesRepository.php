<?php namespace App\People\Repositories;

use Melisa\Repositories\Eloquent\Repository;

/**
 * 
 * @author Luis Josafat Heredia Contreras
 */
class FilesTypesRepository extends Repository
{
    
    public function model() {
        
        return 'App\People\Models\FilesTypes';
        
    }
    
}
