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
			'croquis' => 'required|string',
			'documento_otro' => 'required|string',
			'inf_psicologico' => 'required|string',
			'inf_social' => 'required|string',
			'violencia_economica' => 'required|string',
			'violencia_fisica' => 'required|string',
			'violencia_otro' => 'required|string',
			'violencia_psicologica' => 'required|string',
			'violencia_sexual' => 'required|string',
			'observaciones' => 'string',
        ];
    }
}
