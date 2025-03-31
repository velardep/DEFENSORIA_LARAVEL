<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DenunciaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'fecha' => 'date',
			'departamento' => 'string',
			'nombre_servicio' => 'string',
			'municipio' => 'string',
			'num_caso' => 'string',
			'cod_slim' => 'string',
            'id_agresor' => 'required|exists:agresor,id',
            'id_victima' => 'required|exists:victima,id',
            'id_tipo_violencia' => 'required|exists:tipo_violencia,id', // o como se llame la tabla
            'id_violencia' => 'required|exists:violencia,id',
			'condicion' => 'boolean',
        ];
    }
}
