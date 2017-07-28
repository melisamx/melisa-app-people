<?php

namespace App\People\Http\Controllers;

use Melisa\Laravel\Http\Controllers\CrudController;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class CountriesController extends CrudController
{
    
    protected $paging = [
        'request'=>'Countries\PagingRequest',
        'criteria'=>'Countries\PagingCriteria',
    ];
    
}
