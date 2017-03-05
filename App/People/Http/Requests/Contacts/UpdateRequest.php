<?php namespace App\People\Http\Requests\Contacts;

use App\People\Http\Requests\Contacts\CreateRequest;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class UpdateRequest extends CreateRequest
{
    
    /**
     * Reuse input create request
     * @return array
     */
    public function rules()
    {
        
        $rules = parent::rules();
        $rules ['id']= 'bail|required|alpha_dash|size:36|xss|exists:people.people,id';
        
        return $rules;
        
    }
    
}
