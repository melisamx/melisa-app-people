<?php namespace App\People\Http\Controllers\Modules;

use Melisa\Laravel\Http\Controllers\Controller;
use App\People\Modules\Contacts\ViewModule;
use App\People\Modules\Contacts\AddModule;
use App\People\Modules\Contacts\AddSimpleModule;
use App\People\Modules\Contacts\UpdateModule;

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
    
    public function addSimple(AddSimpleModule $module)
    {        
        return $module->render();        
    }
    
    public function update(UpdateModule $module)
    {        
        return $module->render();        
    }
    
}
