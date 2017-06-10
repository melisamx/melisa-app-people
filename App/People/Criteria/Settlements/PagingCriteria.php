<?php

namespace App\People\Criteria\Settlements;

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
            $builder = $builder->where('postalCode', 'like', '%' . $input['query'] . '%');            
        }
        
        return $builder
            ->select([
                'settlements.*',
                's.id as idState',
                's.name as state',
                'm.name as municipality',
                'ts.name as typeSettlement',
            ])
            ->join('municipalities as m', 'm.id', '=', 'settlements.idMunicipality')
            ->join('states as s', 's.id', '=', 'm.idState')
            ->join('typesSettlements as ts', 'ts.id', '=', 'settlements.idTypeSettlement')
            ->orderBy('settlements.postalCode');        
    }
    
}