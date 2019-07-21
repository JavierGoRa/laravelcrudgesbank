<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateAccountRequest extends FormRequest
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
            'numCuenta' => 'required|unique:Account|string',
            'client_id' => 'required|numeric',            
            'fechaAlta' => 'required|date',
            'saldo' => 'required|string',
            'fechaUMov' => 'required|date',
            'numMvtos' => 'required|string'
        ];
    }
}
