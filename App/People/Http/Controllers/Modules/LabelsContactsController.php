<?php namespace App\People\Http\Controllers\Modules;

use Melisa\Laravel\Http\Controllers\Controller;
use App\People\Modules\Labels\Contacts\ViewModule;
use App\People\Modules\Labels\Contacts\AddModule;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class LabelsContactsController extends Controller
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
