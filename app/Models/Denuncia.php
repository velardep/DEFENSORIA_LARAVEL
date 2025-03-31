<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Denuncia
 *
 * @property $id
 * @property $fecha
 * @property $departamento
 * @property $nombre_servicio
 * @property $municipio
 * @property $num_caso
 * @property $cod_slim
 * @property $id_agresor
 * @property $id_tipo_violencia
 * @property $id_victima
 * @property $condicion
 * @property $id_violencia
 *
 * @property Agresor $agresor
 * @property Victima $victima
 * @property TipoViolencia $tipoviolencias
 * @property Violencia $violencia
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Denuncia extends Model
{
    public $timestamps = false; // 👈 Agrega esto

    protected $table = 'denuncia'; // 👈 Laravel sabrá qué tabla usar

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['fecha', 'departamento', 'nombre_servicio', 'municipio', 'num_caso', 'cod_slim', 'id_agresor', 'id_tipo_violencia', 'id_victima', 'condicion', 'id_violencia'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function agresor()
    {
        return $this->belongsTo(\App\Models\Agresor::class, 'id_agresor', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function victima()
    {
        return $this->belongsTo(\App\Models\Victima::class, 'id_victima', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipoviolencias()
    {
        return $this->belongsTo(\App\Models\TipoViolencia::class, 'id_tipo_violencia', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function violencia()
    {
        return $this->belongsTo(\App\Models\Violencia::class, 'id_violencia', 'id');
    }
    
}
