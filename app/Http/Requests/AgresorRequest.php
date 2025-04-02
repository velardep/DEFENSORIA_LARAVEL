<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgresorRequest extends FormRequest
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
			'nombre' => 'string',
			'ap_paterno' => 'string',
			'ap_materno' => 'string',
			'sexo' => 'string',
			'lugr_nacimiento' => 'string',
            'especifique_lugar' => 'string',
            'fecha_nacimiento' => 'string',
            'edad' => 'string',
			'residencia_habitual' => 'string',
            'especifique_residencia' => 'string',
			'estado_civil' => 'string',
			'logro_educativo' => 'string',
			'ultimo_curso' => 'string',
			'actividad' => 'string',
			'especifique_actividad' => 'string',
			'ingreso' => 'string',
            'monto' => 'string', 
			'idioma' => 'string',
			'especifique_idioma' => 'string',
            'num_documento' => 'string',
            'expedido' => 'string',
            'tipo_documento' => 'string',

            'distrito' => 'string',
            'zona_barrio' => 'string',
			'avenida_calle' => 'string',
			'nom_edificio' => 'string',
			'telefono_domicilio' => 'string',
			'num_vivienda' => 'string',
			'num_piso_departamento' => 'string',
			'lugar_domicilio' => 'string',
			'especifique' => 'string',


            'nombre_empresa' => 'string',
			'empresa_zona_barrio' => 'string',
			'empresa_avenida_calle' => 'string',
			'empresa_telefono' => 'string',
			'empresa_num_edificio' => 'string',

            'adulto_mayor' => 'string'
        ];
    }
}
