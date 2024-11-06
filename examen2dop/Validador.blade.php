<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Validardor extends Prendas{

}

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool;
    {
        return True;
    }
    public function rules(): array

    {
        return [
        'Prenda' => 'required',
        'color' =>'required',
        'cantidad' =>'required|numeri',
        
        

        ];
    }
}