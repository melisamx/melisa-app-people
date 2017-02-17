<?php namespace App\People\Http\Requests\Contacts;

use Melisa\Laravel\Http\Requests\Generic;
use Melisa\Sanitizes\BeforeSanitize;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class CreateRequest extends Generic
{
    use BeforeSanitize;
    
    protected $rules = [
        'name'=>'bail|required|max:45|xss',
        'lastName'=>'bail|required|max:45|xss',
        'sex'=>'bail|required|xss|boolean',
        'active'=>'bail|required|xss|boolean',
        'nickName'=>'bail|sometimes|max:45|xss',
        'nss'=>'bail|sometimes|max:11|xss|alpha_num',
        'curp'=>'bail|sometimes|max:18|xss|alpha_num',
        'rfc'=>'bail|sometimes|max:13|xss|alpha_num',
        'idBloodType'=>'bail|sometimes|xss|integer|exists:people.bloodTypes,id',
    ];
    
    protected $sanitizes = [
        'active'=>'boolean',
        'sex'=>'boolean',
    ];
    
}
