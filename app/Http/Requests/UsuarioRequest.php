<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioRequest extends FormRequest
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
			'super_usuario' => 'required|boolean',
			'nombre_usuario' => 'required|string',
			'nombre' => 'required|string',
			'apellidos' => 'required|string',
			'correo' => 'required|string',
			'is_staff' => 'required|boolean',
			'activo' => 'required|boolean',
			'date_joined' => 'required',
			'id_oficinas' => 'required',
        ];
    }
}
