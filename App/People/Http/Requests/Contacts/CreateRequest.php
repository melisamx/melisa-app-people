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
        'nss'=>'bail|nullable|alpha_num|max:11|xss',
        'curp'=>'bail|nullable|alpha_num|max:18|xss',
        'rfc'=>'bail|nullable|alpha_num|max:13|xss',
        'idBloodType'=>'bail|nullable|xss|integer|exists:people.bloodTypes,id',
        'emails'=>'bail|nullable|xss|json',
        'phoneNumbers'=>'bail|nullable|xss|json',
        'addresses'=>'bail|nullable|xss|json',
        'files'=>'bail|nullable|xss|json',
        'labels'=>'bail|nullable|xss|json',
        'birthday'=>'bail|nullable|xss|date_format:Y-m-d',
    ];
    
    protected $sanitizes = [
        'active'=>'boolean',
        'sex'=>'boolean',
    ];
    
}
