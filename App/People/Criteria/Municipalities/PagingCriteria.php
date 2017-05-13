<?php namespace App\People\Criteria\Municipalities;

use Melisa\Laravel\Criteria\FilterCriteria;
use Melisa\Repositories\Contracts\RepositoryInterface;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class PagingCriteria extends FilterCriteria
{
    
    public function apply($model, RepositoryInterface $repository, array $input = [])
    {
        
        $builder = parent::apply($model, $repository, $input);
        
        if( isset($input['query'])) {            
            $builder = $builder->where('name', 'like', '%' . $input['query'] . '%');            
        }
        
        return $builder
                ->orderBy('municipalities.name');
        
    }
    
}
