<?php

namespace App\People\Http\Controllers;

use Melisa\Laravel\Http\Controllers\Controller;
use Melisa\Laravel\Logics\PagingLogic;
use Melisa\Laravel\Logics\DeleteLogic;
use App\People\Http\Requests\Contacts\PagingRequest;
use App\People\Http\Requests\Contacts\CreateRequest;
use App\People\Http\Requests\Contacts\DeleteRequest;
use App\People\Http\Requests\Contacts\UpdateRequest;
use App\People\Repositories\PeopleRepository;
use App\People\Criteria\Contacts\PagingCriteria;
use App\People\Logics\Contacts\CreateLogic;
use App\People\Logics\Contacts\ReportLogic;
use App\People\Logics\Contacts\UpdateLogic;
use App\People\Modules\Contacts\ReportModule;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class ContactsController extends Controller
{
    
    public function paging(
        PagingRequest $request, 
        PeopleRepository $repository, 
        PagingCriteria $criteria
    )
    {        
        $logic = new PagingLogic($repository, $criteria);        
        $result = $logic->init($request->allValid());
        return response()->paging($result);
    }
    
    public function create(
        CreateRequest $request, 
        PeopleRepository $repository, 
        CreateLogic $logic
    )
    {        
        $result = $logic->init($request->allValid());        
        return response()->data($result);        
    }
    
    public function update(
        UpdateRequest $request, 
        PeopleRepository $repository, 
        UpdateLogic $logic
    )
    {        
        $result = $logic->init($request->allValid());        
        return response()->data($result);        
    }
    
    public function delete(
        DeleteRequest $request, 
        PeopleRepository $repository
    )
    {        
        $logic = new DeleteLogic($repository);        
        $result = $logic
            ->setFireEvent('event.people.people.contacts.delete.success')
            ->init($request->allValid());        
        return response()->data($result);        
    }
    
    public function report(
        $id, 
        $format, 
        ReportModule $module, 
        ReportLogic $logic
    )
    {        
        if( $format === 'json') {
            return response()->data($logic->init($id));
        }
        
        return $module
            ->withInput($logic->init($id))
            ->render($id);
    }
    
}
