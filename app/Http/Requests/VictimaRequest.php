<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class VictimaRequest extends FormRequest
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
            'especifique_nacimiento' => 'string',
            'fecha_nacimiento' => 'string',
            'edad' => 'string',
			'residencia_habitual' => 'string',
            'especifique_residencia' => 'string',
			'estado_civil' => 'string',
            'celular' => 'string',
			'rel_victima_agresor' => 'string',
            'hijos' => 'string',
			'logro_educativo' => 'string',
			'actividad' => 'string',
			'ingreso' => 'string',
            'monto' => 'string',
			'idioma' => 'string',
            'num_documento' => 'string',
            'expedido' => 'string',
            'tipo_docmuento' => 'string',
 
            'distrito' => 'string',
            'zona_barrio' => 'string',
			'avenida_calle' => 'string',
			'nom_edificio' => 'string',
			'telefono_referencia' => 'string',
			'num_vivienda' => 'string',
			'num_piso_departamento' => 'string',
			'lugar_domicilio' => 'string',
			'especifique' => 'string',

            'adulto_mayor' => 'string',

            'discapacidad' => 'string',
            'grado_discapacidad' => 'string'

            


        ];
    }
}
