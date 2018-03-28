<?php

namespace App\People\Http\Controllers;

use Melisa\Laravel\Http\Controllers\Controller;
use Melisa\Laravel\Logics\PagingLogic;
use App\People\Http\Requests\Municipalities\PagingRequest;
use App\People\Repositories\MunicipalitiesRepository;
use App\People\Criteria\Municipalities\PagingCriteria;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class MunicipalitiesController extends Controller
{
    
    public function paging(
        PagingRequest $request, 
        MunicipalitiesRepository $repository, 
        PagingCriteria $criteria
    )
    {        
        $logic = new PagingLogic($repository, $criteria);        
        $result = $logic->init($request->allValid());
        return response()->paging($result);        
    }
    
}
