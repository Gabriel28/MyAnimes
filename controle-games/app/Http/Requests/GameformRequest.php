<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GameformRequest extends FormRequest
{
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
            'name' => 'required|min:2'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'O campo :attribute é obrigatório',
            'name.min' => 'O campo Nome precisa ter pelo menos 2 caracteres'
        ];
    }
}