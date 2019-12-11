<?php

namespace App\Http\Requests\App;

use Illuminate\Foundation\Http\FormRequest;

class SubmitDemographyRequest extends FormRequest
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
        return [
            'education' => 'required|string|max:254',
            'employment' => 'required|string|max:254',
            'digital_apps' => 'required|string|max:254',
            'social_media' => 'required|string|max:254',
            'patient_communities' => 'required|string|max:254',
            'nutrition' => 'required|string|max:254',
            'mobility' => 'required|string|max:254'
        ];
    }
}
