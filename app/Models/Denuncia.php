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
 * @property $estado
 * @property $id_violencia
 * 
 * @property $forma_ingreso
 * @property $denuncia_previa
 * @property $testimonio
 * 
 * @property $completada
 * @property $num_juzgado
 * 
 * @property $delitos_penales
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
    protected $fillable = ['fecha', 'departamento', 'nombre_servicio', 'municipio', 'num_caso', 
    'cod_slim', 'id_agresor', 'id_victima', 'estado', 'violencia_fisica', 'violencia_psicologica',
    'violencia_sexual', 'violencia_economica', 'forma_ingreso', 'denuncia_previa', 'testimonio', 'completada',
    'zona_barrio', 'avenida_calle', 'nom_edificio', 'num_vivienda', 'lugar_domicilio', 'especifique', 'delitos_penales', 
    'emblematico', 'num_juzgado'];


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

    public function acciones()
    {
        return $this->hasMany(\App\Models\Accion::class, 'denuncia_id', 'id');
    }
    
    


    
}
