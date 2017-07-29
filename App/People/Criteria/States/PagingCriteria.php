<?php

namespace App\People\Criteria\States;

use Melisa\Laravel\Criteria\FilterCriteria;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class PagingCriteria extends FilterCriteria
{
    
    public function apply($model, $repository, array $input = [])
    {        
        $builder = parent::apply($model, $repository, $input);
        
        if( isset($input['query'])) {            
            $builder = $builder->where('name', 'like', '%' . $input['query'] . '%');            
        }
        
        return $builder->orderBy('states.name');        
    }
    
}
