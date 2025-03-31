<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Agresor
 *
 * @property $id
 * @property $nombre
 * @property $ap_paterno
 * @property $ap_materno
 * @property $sexo
 * @property $lugr_nacimiento
 * @property $especifique_lugar
 * @property $fecha_nacimiento
 * @property $edad
 * @property $residencia_habitual
 * @property $especifique_residencia
 * @property $estado_civil
 * @property $logro_educativo
 * @property $ultimo_curso
 * @property $actividad
 * @property $especifique_actividad
 * @property $ingreso
 * @property $monto
 * @property $idioma
 * @property $especifique_idioma
 * @property $id_domicilio
 * @property $id_domicilio_trabajo
 * @property $num_documento
 *
 * 
 * 
 * 
 * @property Documento $documento
 * @property Domicilio $domicilio
 * @property DomicilioTrabajo $domicilioTrabajo
 * @property Denuncium[] $denuncias
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Agresor extends Model
{
    public $timestamps = false; // 👈 Agrega esto

    protected $table = 'agresor'; // 👈 Laravel sabrá qué tabla usar

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'ap_paterno', 'ap_materno', 'sexo','lugr_nacimiento', 'especifique_lugar',
                            'fecha_nacimiento', 'edad', 'residencia_habitual', 'especifique_residencia', 'estado_civil', 
                            'logro_educativo', 'ultimo_curso', 'actividad', 'especifique_actividad',
                            'ingreso', 'monto',  'idioma', 'especifique_idioma', 'num_documento'];


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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function domicilioTrabajo()
    {
        return $this->belongsTo(\App\Models\DomicilioTrabajo::class, 'id_domicilio_trabajo', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function denuncias()
    {
        return $this->hasMany(\App\Models\Denuncium::class, 'id', 'id_agresor');
    }
    
}
