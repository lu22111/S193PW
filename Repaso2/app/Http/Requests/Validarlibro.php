<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Validarlibro extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array

    {
        return [
        'Isbn' => 'required|numeric|min:13',
        'Titulo' =>'required|max:150',
        'Autor' =>'required',
        'Paginas' =>'required|numeric',
        'Año' =>'required|numeric|min:1|max:2024',
        'Editorial' =>'required',
        'Correo' =>'required|email'

        ];
    }
}
