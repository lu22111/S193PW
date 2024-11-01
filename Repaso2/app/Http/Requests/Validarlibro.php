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
        return true; // Cambié "True" a "true" para seguir la convención de PHP.
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'Isbn' => 'required|numeric|min:1000000000000', // Asegura que sea un ISBN de 13 dígitos
            'Titulo' => 'required|max:150',
            'Autor' => 'required|string|max:100', // Limité el tamaño del autor
            'Paginas' => 'required|numeric|min:1', // Asegura que el número de páginas sea positivo
            'Año' => 'required|numeric|min:1900|max:2024', // Cambié el límite inferior a 1900
            'Editorial' => 'required|string|max:100', // Limité el tamaño de la editorial
            'Correo' => 'required|email|max:150' // Limité el tamaño del correo
        ];
    }

    /**
     * Get custom error messages for validation failures.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'Isbn.required' => __('messages.isbn_required'),
            'Isbn.numeric' => __('messages.isbn_numeric'),
            'Isbn.min' => __('messages.isbn_min'),

            'Titulo.required' => __('messages.title_required'),
            'Titulo.max' => __('messages.title_max'),

            'Autor.required' => __('messages.author_required'),
            'Autor.string' => __('messages.author_string'),
            'Autor.max' => __('messages.author_max'),

            'Paginas.required' => __('messages.pages_required'),
            'Paginas.numeric' => __('messages.pages_numeric'),
            'Paginas.min' => __('messages.pages_min'),

            'Año.required' => __('messages.year_required'),
            'Año.numeric' => __('messages.year_numeric'),
            'Año.min' => __('messages.year_min'),
            'Año.max' => __('messages.year_max'),

            'Editorial.required' => __('messages.editorial_required'),
            'Editorial.string' => __('messages.editorial_string'),
            'Editorial.max' => __('messages.editorial_max'),

            'Correo.required' => __('messages.email_required'),
            'Correo.email' => __('messages.email_invalid'),
            'Correo.max' => __('messages.email_max'),
        ];
    }
}
