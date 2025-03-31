<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Victima
 *
 * @property $id
 * @property $nombre
 * @property $ap_paterno
 * @property $ap_materno
 * @property $sexo
 * @property $lugr_nacimiento
 * @property $fecha_nacimiento
 * @property $edad
 * @property $residencia_habitual
 * @property $estado_civil
 * @property $rel_victima_agresor
 * @property $hijos
 * @property $logro_educativo
 * @property $actividad
 * @property $ingreso
 * @property $monto
 * @property $idioma
 * @property $especifique_idioma
 * @property $id_documento
 *
 * @property Documento $documento
 * @property Denuncium[] $denuncias
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Victima extends Model
{
    public $timestamps = false; // 👈 Agrega esto

    protected $table = 'victima'; // 👈 Laravel sabrá qué tabla usar

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'ap_paterno', 'ap_materno', 'sexo', 'lugr_nacimiento', 'fecha_nacimiento', 'edad', 
    'residencia_habitual', 'estado_civil', 'rel_victima_agresor', 'hijos', 'logro_educativo', 'actividad', 'ingreso', 
    'monto', 'idioma', 'especifique_idioma', 'id_documento', 'especifique_residencia', 'celular', 'especifique_nacimiento'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function documento()
    {
        return $this->belongsTo(\App\Models\Documento::class, 'id_documento', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function domicilio()
    {
        return $this->belongsTo(\App\Models\Domicilio::class, 'id_domicilio', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function denuncias()
    {
        return $this->hasMany(\App\Models\Denuncium::class, 'id', 'id_victima');
    }
    
}
