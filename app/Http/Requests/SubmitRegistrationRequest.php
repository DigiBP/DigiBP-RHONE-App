<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubmitRegistrationRequest extends FormRequest
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
     *
     * @return array
     */
    public function rules()
    {
        //before:today|after:1900-01-01

        return [
            'email' => 'required|string|email|max:254|unique:users,email',
            'birthdate' => 'required|date_format:Y-m-d',
            'confirmed_diagnosis' => 'required|accepted'
        ];
    }
}
