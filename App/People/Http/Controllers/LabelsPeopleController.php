<?php

namespace App\People\Http\Controllers;

use Melisa\Laravel\Http\Controllers\Controller;
use Melisa\Laravel\Logics\PagingLogic;
use App\People\Http\Requests\Labels\People\PagingRequest;
use App\People\Repositories\LabelsRepository;
use App\People\Criteria\Labels\People\PagingCriteria;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class LabelsPeopleController extends Controller
{
    
    public function paging(
        PagingRequest $request, 
        LabelsRepository $repository, 
        PagingCriteria $criteria
    )
    {        
        $logic = new PagingLogic($repository, $criteria);        
        $result = $logic->init($request->allValid());
        return response()->paging($result);
    }
    
}
