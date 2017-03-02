<?php namespace App\People\Criteria\Labels\People;

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
                ->join('labelsTypes as lt', 'lt.id', '=', 'labels.idLabelType')
                ->where('lt.name', LabelsTypes::CONTACTS)
                ->select('labels.*')
                ->orderBy('labels.name');
        
    }
    
}
