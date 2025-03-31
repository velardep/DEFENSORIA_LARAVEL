<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DomicilioTrabajoRequest extends FormRequest
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
			'nombre_empresa' => 'string',
			'zona_barrio' => 'string',
			'avenida_calle' => 'string',
			'telefono_trabajo' => 'string',
			'num_edificio' => 'string',
            'id_agresor' => 'nullable|exists:agresor,id',

        ];
    }
}
