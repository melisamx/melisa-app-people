<?php namespace App\People\Http\Requests\Contacts;

use Melisa\Laravel\Http\Requests\Generic;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class DeleteRequest extends Generic
{
    
    protected $rules = [
        'id'=>'bail|required|numeric|xss|exists:Contacts,id'        
    ];
    
}
