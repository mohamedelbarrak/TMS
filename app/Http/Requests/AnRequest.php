<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *required|
     * @return array
     */
    public function rules()
    {
        return [
            'titre' => 'min:5|max:30',
            'presentation' => 'min:100|max:4000',
            'adresse' => 'min:10|max:65',
            'numero' => 'min:9|max:20',
            'photo' => 'image'

        ];
    }
}
