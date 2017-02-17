<?php namespace App\People\Http\Controllers;

use Melisa\Laravel\Http\Controllers\Controller;
use Melisa\Laravel\Logics\PagingLogics;

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
    
    public function paging(PagingRequest $request, BloodTypesRepository $repository, PagingCriteria $criteria) {
        
        $logic = new PagingLogics($repository, $criteria);
        
        return $logic->init($request->allValid());
        
    }
    
}
