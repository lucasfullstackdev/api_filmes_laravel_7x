<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AtorRequest extends FormRequest
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
            'nm_ator' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nm_ator.required' => 'Nome do ator é obrigatório'
        ];
    }
}
