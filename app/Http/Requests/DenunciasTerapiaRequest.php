<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DenunciasTerapiaRequest extends FormRequest
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
			'otro_tipo' => 'string',
			'otro_documento' => 'string',
			'derivacion' => 'string',
			'denuncia_id' => 'required',
			'croquis' => 'required|boolean',
			'documento_otro' => 'required|boolean',
			'inf_psicologico' => 'required|boolean',
			'inf_social' => 'required|boolean',
			'violencia_economica' => 'required|boolean',
			'violencia_fisica' => 'required|boolean',
			'violencia_otro' => 'required|boolean',
			'violencia_psicologica' => 'required|boolean',
			'violencia_sexual' => 'required|boolean',
			'observaciones' => 'string',
        ];
    }
}
