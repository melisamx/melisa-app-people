<?php

namespace App\People\Criteria\Settlements;

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
            $builder = $this->buildQuery($builder, $input['query']);
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
    
    /**
     * Support like settlement
     */
    public function buildQuery(&$builder, $query)
    {
        $words = explode(' ', $query);
        
        if( count($words) > 1) {
            $builder = $builder->where('settlements.settlement', 'like', '%' . $words[1] . '%');
        }
        
        return $builder
            ->where('postalCode', 'like', '%' . $words[0] . '%');
    }
    
}
