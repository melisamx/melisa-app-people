<?php

namespace App\People\Http\Controllers;

use Melisa\Laravel\Http\Controllers\Controller;
use Melisa\Laravel\Logics\PagingLogic;

use App\People\Http\Requests\BloodTypes\PagingRequest;

use App\People\Repositories\BloodTypesRepository;
use App\People\Criteria\BloodTypes\PagingCriteria;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class BloodTypes extends Controller
{
    
    public function paging(
        PagingRequest $request, 
        BloodTypesRepository $repository, 
        PagingCriteria $criteria
    )
    {        
        $logic = new PagingLogic($repository, $criteria);        
        $result = $logic->init($request->allValid());
        return response()->paging($result);
    }
    
}
