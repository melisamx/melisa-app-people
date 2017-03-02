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
        
        if( isset($input['filter'])) {
            $builder = $this->appendFilters($model, $input['filter']);
        }
        
        return $builder
                ->select([
                    'people.*',
                    \DB::raw(implode('', [
                        '(',
                        'select email from peopleEmails ',
                        'where idPeople=people.id ',
                        'limit 1',
                        ') as email'
                    ]))
                ])
                ->orderBy('people.name');
        
    }
    
    public function appendFilters(&$model, array &$filters)
    {
        
        $builder = $model;
        
        foreach($filters as $filter) {
            
            if( $filter->property === 'idLabel') {
                
                $builder = $builder->join('peopleLabels as l', function($join) use ($filter) {
                    
                    $join->on('l.idLabel', '=', \DB::raw("'" . $filter->value . "'"));
                    $join->on('l.idPeople', '=', 'people.id');
                    
                });
                
            } else {
                
                $builder = $builder->where($filter->property, 'like', '%' . $filter->value . '%');
                
            }
            
        }
        
        return $builder;
        
    }
    
}
