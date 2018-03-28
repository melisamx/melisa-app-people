<?php

namespace App\People\Http\Controllers;

use Melisa\Laravel\Http\Controllers\Controller;
use Melisa\Laravel\Logics\PagingLogic;
use App\People\Http\Requests\States\PagingRequest;
use App\People\Repositories\StatesRepository;
use App\People\Criteria\States\PagingCriteria;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class StatesController extends Controller
{
    
    public function paging(
        PagingRequest $request, 
        StatesRepository $repository, 
        PagingCriteria $criteria
    )
    {        
        $logic = new PagingLogic($repository, $criteria);        
        $result = $logic->init($request->allValid());
        return response()->paging($result);
    }
    
}
