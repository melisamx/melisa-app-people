<?php namespace App\People\Http\Requests\Contacts;

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
        'filter'=>'bail|sometimes|json|filter:name,idLabel,lastName',
        'query'=>'bail|sometimes|xss'
    ];
    
    public $rulesFilters = [
        'name'=>'bail|sometimes|xss|max:36',
        'idLabel'=>'bail|sometimes|xss|alpha_dash|size:36',
        'lastName'=>'bail|sometimes|xss|max:36',
    ];
    
}
