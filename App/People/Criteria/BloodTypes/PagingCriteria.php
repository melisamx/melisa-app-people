<?php

namespace App\People\Criteria\BloodTypes;

use Melisa\Repositories\Criteria\Criteria;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class PagingCriteria extends Criteria
{
    
    public function apply($model, $repository, array $input = [])
    {        
        $builder = $model;
        
        if( isset($input['query'])) {            
            $builder = $builder->where('name', 'like', '%' . $input['query'] . '%');
        }
        
        return $builder->orderBy('bloodTypes.name');        
    }
    
}
