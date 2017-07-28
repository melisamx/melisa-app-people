<?php

namespace App\People\Http\Requests\Countries;

use Melisa\Laravel\Http\Requests\WithFilter;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class PagingRequest extends WithFilter
{
    
    protected $rules = [
        'page'=>'required|xss|numeric',
        'start'=>'required|xss|numeric',
        'limit'=>'required|xss|numeric',
        'query'=>'sometimes|xss',
        'filter'=>'sometimes|json|filter:name',
    ];
    
    public $rulesFilters = [
        'name'=>'sometimes|max:36|xss',
    ];
    
}
