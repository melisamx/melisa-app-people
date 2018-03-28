<?php

namespace App\People\Http\Controllers;

use Melisa\Laravel\Http\Controllers\Controller;
use Melisa\Laravel\Logics\PagingLogic;
use Melisa\Laravel\Logics\CreateLogic;
use Melisa\Laravel\Logics\DeleteLogic;
use App\People\Http\Requests\Labels\PhoneNumbers\PagingRequest;
use App\People\Http\Requests\Labels\PhoneNumbers\CreateRequest;
use App\People\Http\Requests\Labels\PhoneNumbers\DeleteRequest;
use App\People\Repositories\LabelsRepository;
use App\People\Criteria\Labels\PhoneNumbers\PagingCriteria;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class LabelsPhoneNumbersController extends Controller
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
            ->setFireEvent('event.people.labels.phoneNumbers.create.success')
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
            ->setFireEvent('event.people.labels.phoneNumbers.delete.success')
            ->init($request->allValid());        
        return response()->data($result);        
    }
    
}
