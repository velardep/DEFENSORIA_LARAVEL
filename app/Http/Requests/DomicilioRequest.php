<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DomicilioRequest extends FormRequest
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
			'zona_barrio' => 'string',
			'avenida_calle' => 'string',
			'nom_edificio' => 'string',
			'telefono_domicilio' => 'string',
			'num_distrito' => 'string',
			'num_vivienda' => 'string',
			'num_piso_departamento' => 'string',
			'lugar_domicilio' => 'string',
			'especifique' => 'string',
            'id_victima' => 'nullable|integer|exists:victima,id',
            'id_agresor' => 'nullable|integer|exists:agresor,id',

        ];

    }
}
