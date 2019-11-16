<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactoValidacion extends FormRequest
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
            'nombre' => 'required|max:100|min:3',
            'telefono' => 'required|max:10|min:8|unique:contactos,telefono,' . $this->route('id'),
            'correo' => 'required|max:100|min:10|unique:contactos,correo,' . $this->route('id'),
            'tipo' => 'required|max:100|min:3',
            'mensaje' => 'min:10'
        ];
    }
}
