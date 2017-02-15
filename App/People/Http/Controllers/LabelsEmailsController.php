<?php namespace App\People\Http\Controllers;

use Melisa\Laravel\Http\Controllers\Controller;
use Melisa\Laravel\Logics\PagingLogics;
use Melisa\Laravel\Logics\CreateLogic;
use Melisa\Laravel\Logics\DeleteLogic;

use App\People\Http\Requests\Labels\Emails\PagingRequest;
use App\People\Http\Requests\Labels\Emails\CreateRequest;
use App\People\Http\Requests\Labels\Emails\DeleteRequest;

use App\People\Repositories\LabelsRepository;
use App\People\Criteria\Labels\Emails\PagingCriteria;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class LabelsEmailsController extends Controller
{
    
    public function paging(PagingRequest $request, LabelsRepository $repository, PagingCriteria $criteria) {
        
        $logic = new PagingLogics($repository, $criteria);
        
        return $logic->init($request->allValid());
        
    }
    
    public function create(CreateRequest $request, LabelsRepository $repository)
    {
        
        $logic = new CreateLogic($repository);
        
        $result = $logic
                ->setFireEvent('event.people.labels.emails.create.success')
                ->init($request->allValid());
        
        return response()->data($result);
        
    }
    
    public function delete(DeleteRequest $request, LabelsRepository $repository)
    {
        
        $logic = new DeleteLogic($repository);
        
        $result = $logic
                ->setFireEvent('event.people.labels.emails.delete.success')
                ->init($request->allValid());
        
        return response()->data($result);
        
    }
    
}
