<?php namespace App\People\Http\Controllers\Modules;

use Melisa\Laravel\Http\Controllers\Controller;
use App\People\Modules\Contacts\ViewModule;
use App\People\Modules\Contacts\AddModule;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class ContactsController extends Controller
{
    
    public function view(ViewModule $module)
    {        
        return $module->render();        
    }
    
    public function add(AddModule $module)
    {        
        return $module->render();        
    }
    
}
