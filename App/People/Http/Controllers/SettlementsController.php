<?php

namespace App\People\Http\Controllers;

use Melisa\Laravel\Http\Controllers\Controller;
use Melisa\Laravel\Logics\PagingLogic;
use App\People\Http\Requests\Settlements\PagingRequest;
use App\People\Repositories\SettlementsRepository;
use App\People\Criteria\Settlements\PagingCriteria;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class SettlementsController extends Controller
{
    
    public function paging(
        PagingRequest $request, 
        SettlementsRepository $repository, 
        PagingCriteria $criteria
    )
    {        
        $logic = new PagingLogic($repository, $criteria);
        $result = $logic->init($request->allValid());
        return response()->paging($result);
    }
    
}
