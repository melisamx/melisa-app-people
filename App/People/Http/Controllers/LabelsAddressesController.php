<?php 

namespace App\People\Http\Controllers;

use Melisa\Laravel\Http\Controllers\Controller;
use Melisa\Laravel\Logics\PagingLogic;
use Melisa\Laravel\Logics\CreateLogic;
use Melisa\Laravel\Logics\DeleteLogic;
use App\People\Http\Requests\Labels\Addresses\PagingRequest;
use App\People\Http\Requests\Labels\Addresses\CreateRequest;
use App\People\Http\Requests\Labels\Addresses\DeleteRequest;
use App\People\Repositories\LabelsRepository;
use App\People\Criteria\Labels\Addresses\PagingCriteria;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class LabelsAddressesController extends Controller
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
    
    public function create(
        CreateRequest $request, 
        LabelsRepository $repository
    )
    {        
        $logic = new CreateLogic($repository);        
        $result = $logic
            ->setFireEvent('event.people.labels.addresses.create.success')
            ->init($request->allValid());        
        return response()->data($result);        
    }
    
    public function delete(
        DeleteRequest $request, 
        LabelsRepository $repository
    )
    {        
        $logic = new DeleteLogic($repository);        
        $result = $logic
            ->setFireEvent('event.people.labels.addresses.delete.success')
            ->init($request->allValid());        
        return response()->data($result);        
    }
    
}
