<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DenunciasDenunciaRequest extends FormRequest
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
			'f_denuncia' => 'required',
			'nro_atencion' => 'required|string',
			'inhabilitado' => 'required|boolean',
			'ingreso' => 'string',
			'especifica_ingreso' => 'string',
			'descripcion' => 'string',
			'opinion' => 'boolean',
			'historia' => 'string',
			'completa' => 'boolean',
			'archivada' => 'required|boolean',
			'procedencia' => 'string',
			'municipio' => 'string',
			'otra_inst' => 'string',
			'nombre_servicio' => 'string',
			'orientacion' => 'boolean',
			'tipo_atencion' => 'string',
			'defensoria_id' => 'required',
			'tipo_denuncia' => 'required|string',
			'estado_orientaciones' => 'string',
			'estado_actual' => 'string',
			'color' => 'string',
        ];
    }
}
