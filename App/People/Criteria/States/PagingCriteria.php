<?php namespace App\People\Criteria\States;

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
        
        return $model
                ->orderBy('states.name');
        
    }
    
}
