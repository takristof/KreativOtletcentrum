<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TermekekRequest extends FormRequest
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
            'termek_nev' => 'required|min:50',
            'ar' => 'required|numeric|min:1|max:250000',
            'mennyiseg' => 'required|numeric|min:10000',
            'elerheto-e' => 'required|boolean',
        ];
    }
}