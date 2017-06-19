<?php

namespace App\People\Repositories;

use Melisa\Repositories\Eloquent\Repository;

/**
 * 
 * @author Luis Josafat Heredia Contreras
 */
class MigrationsRepository extends Repository
{
    
    public function model()
    {        
        return 'App\People\Models\Migrations';        
    }
    
}
