<?php namespace App\People\Http\Controllers;

use Melisa\Laravel\Http\Controllers\Controller;
use Melisa\Laravel\Logics\PagingLogics;
use Melisa\Laravel\Logics\CreateLogic;
use Melisa\Laravel\Logics\DeleteLogic;

use App\People\Http\Requests\Contacts\PagingRequest;
use App\People\Http\Requests\Contacts\CreateRequest;
use App\People\Http\Requests\Contacts\DeleteRequest;

use App\People\Repositories\ContactsRepository;
use App\People\Criteria\Contacts\PagingCriteria;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class ContactsController extends Controller
{
    
    public function paging(PagingRequest $request, ContactsRepository $repository, PagingCriteria $criteria) {
        
        $logic = new PagingLogics($repository, $criteria);
        
        return $logic->init($request->allValid());
        
    }
    
    public function create(CreateRequest $request, ContactsRepository $repository)
    {
        
        $logic = new CreateLogic($repository);
        
        $result = $logic
                ->setFireEvent('event.people.contacts.create.success')
                ->init($request->allValid());
        
        return response()->data($result);
        
    }
    
    public function delete(DeleteRequest $request, ContactsRepository $repository)
    {
        
        $logic = new DeleteLogic($repository);
        
        $result = $logic
                ->setFireEvent('event.people.contacts.delete.success')
                ->init($request->allValid());
        
        return response()->data($result);
        
    }
    
}
