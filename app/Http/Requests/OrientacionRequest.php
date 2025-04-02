<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrientacionRequest extends FormRequest
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
			'equipo' => 'string',
			'profesional_asignado' => 'string',
			'orientacion' => 'string',

			'nombre_persona' => 'string',
			'telefono' => 'string',
			'barrio' => 'string',
			'motivo' => 'string',
			'resutado_entrevista' => 'string',
			'num_caso' => 'string',
        ];
    }



}
