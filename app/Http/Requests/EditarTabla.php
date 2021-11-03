<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditarTabla extends FormRequest
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
            
            "codigocliente"=>"required|unique:clientedos,codigocliente,".$this->route('clientedos')->id,
            //"codigoCarnet"=>"required|unique:estudiantes,codigoCarnet,".$this->route('estudiante')->id,
            "Nombre"=>"required",
            "apellido"=>"required",
            "direccion"=>"required",
            "telefono"=>"required",
        ];
    }
}
