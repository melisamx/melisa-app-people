<?php namespace App\People\Http\Requests\Municipalities;

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
        'filter'=>'bail|sometimes|json|filter:idState',
    ];
    
    public $rulesFilters = [
        'idState'=>'bail|xss|numeric',
    ];
    
}
