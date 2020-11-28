<?php

namespace App\Http\Requests\School;

use Illuminate\Foundation\Http\FormRequest;

class FormSchool extends FormRequest
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
            'source' => 'required|min:2',
            'enName' => 'required|min:2',
            'jpName' => 'required|min:2',
            'address' => 'required|min:2',
            'website' => 'required|min:2',
        ];
    }
}
