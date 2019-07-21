<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateClientRequest extends FormRequest
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
            'nombre' => 'required|string',
            'apellidos' => 'required|string',            
            'ciudad' => 'required|string',
            'telefono' => 'required|string|min:9|max:15',
            'dni' => 'required|unique:Clients,dni,'.$this->client,
            'email' => 'required|email|max:50|unique:Clients,email,'.$this->client
        ];
    }
}
