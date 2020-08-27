<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class usersRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //return false;
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:4|max:30',
            'prenom' => 'required|min:4|max:30',
            'email' => 'required|min:5|max:40',
            'téléphone' => 'required|min:5|max:20',
            'adresse' => 'required|min:5|max:35',
            'pays' => 'required|min:5|max:30',
            'ville' => 'required|min:5|max:30'
        
    ];
    }
}
