<?php namespace App\People\Criteria\Contacts;

use Melisa\Repositories\Criteria\Criteria;
use Melisa\Repositories\Contracts\RepositoryInterface;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class PagingCriteria extends Criteria
{
    
    public function apply($model, RepositoryInterface $repository, array $input = [])
    {
        
        $builder = $model;
        
        if( isset($input['query'])) {
            return $builder->where('name', 'like', '%' . $input['query'] . '%');
        }
        
        return $builder
                ->orderBy('people.name');
        
    }
    
}
