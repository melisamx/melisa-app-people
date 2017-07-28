<?php

namespace App\People\Http\Controllers;

use Melisa\Laravel\Http\Controllers\Controller;
use Melisa\Laravel\Logics\PagingLogics;

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
    
    public function paging(PagingRequest $request, MunicipalitiesRepository $repository, PagingCriteria $criteria) {
        
        $logic = new PagingLogics($repository, $criteria);
        
        return $logic->init($request->allValid());
        
    }
    
}
