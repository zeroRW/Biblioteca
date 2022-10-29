<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorLibreria extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'Titulo'=>'required',
            'isbn'=>'required|min:13',
            'Paginas'=>'required',
            'Autor'=>'required',
            'Edit'=>'required',
            'Email'=>'required|email'
        ];
    }
}
