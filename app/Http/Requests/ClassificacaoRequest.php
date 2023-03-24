<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClassificacaoRequest extends FormRequest
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
            'ds_classificacao' => 'required|unique:classificacao'
        ];
    }

    public function messages()
    {
        return [
            'ds_classificacao.required' => 'A descrição da classificação é obrigatória',
            'ds_classificacao.unique' => 'A descrição da classificação é única'
        ];
    }

}
