<?php

namespace App\People\Http\Requests\Settlements;

use Melisa\Laravel\Http\Requests\WithFilter;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class PagingRequest extends WithFilter
{
    
    protected $rules = [
        'page'=>'bail|required|xss|numeric',
        'start'=>'bail|required|xss|numeric',
        'limit'=>'bail|required|xss|numeric',
        'query'=>'bail|nullable|xss',
        'filter'=>'bail|sometimes|json|filter:name,postalCode',
    ];
    
    public $rulesFilters = [
        'name'=>'bail|nullable|max:36|xss',
        'postalCode'=>'bail|nullable|xss|numeric',
    ];
    
}
