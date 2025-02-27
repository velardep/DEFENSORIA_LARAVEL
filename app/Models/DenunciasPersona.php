<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DenunciasPersona
 *
 * @property $id
 * @property $nombres
 * @property $apellidos
 * @property $actividad
 * @property $anonimo
 * @property $c_nac
 * @property $estado_civil
 * @property $estudia
 * @property $doc_expedido
 * @property $edad
 * @property $f_nac
 * @property $g_instruccion
 * @property $gestante
 * @property $hijos
 * @property $idioma
 * @property $ingr_eco
 * @property $lgro_educa
 * @property $lug_nacimiento
 * @property $lug_residencia
 * @property $lugar_trabajo
 * @property $monto
 * @property $nro_documento
 * @property $sexo
 * @property $tipo_doc
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DenunciasPersona extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombres', 'apellidos', 'actividad', 'anonimo', 'c_nac', 'estado_civil', 'estudia', 'doc_expedido', 'edad', 'f_nac', 'g_instruccion', 'gestante', 'hijos', 'idioma', 'ingr_eco', 'lgro_educa', 'lug_nacimiento', 'lug_residencia', 'lugar_trabajo', 'monto', 'nro_documento', 'sexo', 'tipo_doc'];


}
