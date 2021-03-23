<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddCompany extends FormRequest
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
            'title' => 'required|min:3|string|unique:companies',
            'description' => 'required|min:3',
            'inn' => 'required|min:3|integer|unique:companies',
            'general' => 'required',
            'location' => 'required|min:3',
            'phone' => 'required|min:3|integer|unique:companies',
            'alias' => 'unique:companies',
        ];
    }
}
