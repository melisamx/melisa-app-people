<?php namespace App\People\Http\Controllers;

use Melisa\Laravel\Http\Controllers\Controller;
use Melisa\Laravel\Logics\PagingLogics;
use Melisa\Laravel\Logics\CreateLogic;
use Melisa\Laravel\Logics\DeleteLogic;

use App\People\Http\Requests\Labels\Contacts\PagingRequest;
use App\People\Http\Requests\Labels\Contacts\CreateRequest;
use App\People\Http\Requests\Labels\Contacts\DeleteRequest;

use App\People\Repositories\LabelsContactsRepository;
use App\People\Criteria\Labels\Contacts\PagingCriteria;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class LabelsContactsController extends Controller
{
    
    public function paging(PagingRequest $request, LabelsContactsRepository $repository, PagingCriteria $criteria) {
        
        $logic = new PagingLogics($repository, $criteria);
        
        return $logic->init($request->allValid());
        
    }
    
    public function create(CreateRequest $request, LabelsContactsRepository $repository)
    {
        
        $logic = new CreateLogic($repository);
        
        $result = $logic
                ->setFireEvent('event.people.labels.contacts.create.success')
                ->init($request->allValid());
        
        return response()->data($result);
        
    }
    
    public function delete(DeleteRequest $request, LabelsContactsRepository $repository)
    {
        
        $logic = new DeleteLogic($repository);
        
        $result = $logic
                ->setFireEvent('event.people.labels.contacts.delete.success')
                ->init($request->allValid());
        
        return response()->data($result);
        
    }
    
}
