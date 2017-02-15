<?php namespace App\People\Criteria\Contacts;

use Melisa\Repositories\Criteria\Criteria;
use Melisa\Repositories\Contracts\RepositoryInterface;
use App\People\Models\LabelsTypes;

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
                ->orderBy('people.name');
        
    }
    
}
