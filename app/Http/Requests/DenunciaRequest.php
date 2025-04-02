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
			'estado' => 'string',

            'violencia_fisica' => 'array',
            'violencia_psicologica' => 'array',
            'violencia_sexual' => 'array',
            'violencia_economica' => 'array',

            'forma_ingreso' => 'string',
            'denuncia_previa' => 'string',
            'testimonio' => 'string',
            'completada' => 'string',

            'distrito' => 'string',
            'zona_barrio' => 'string',
			'avenida_calle' => 'string',
			'nom_edificio' => 'string',
			'num_vivienda' => 'string',
			'lugar_domicilio' => 'string',
			'especifique' => 'string',

            'delitos_penales' => 'string',
            'num_juzgado' => 'string',

            'emblematico' => 'string',

            'violencia_feminicida' => 'string'
            



        ];
    }
}
