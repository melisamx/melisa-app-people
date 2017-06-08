<?php

namespace App\People\Http\Requests\CodePostal;

use Melisa\Laravel\Http\Requests\Generic;
use Melisa\Sanitizes\BeforeSanitize;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class ImportRequest extends Generic
{
    use BeforeSanitize;
    
    protected $rules = [
        'file'=>'bail|required|file',
    ];
    
    protected $sanitizes = [];
    
}
