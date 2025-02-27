<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DenunciasDenuncia
 *
 * @property $id
 * @property $f_denuncia
 * @property $nro_atencion
 * @property $inhabilitado
 * @property $ingreso
 * @property $especifica_ingreso
 * @property $descripcion
 * @property $opinion
 * @property $historia
 * @property $completa
 * @property $archivada
 * @property $procedencia
 * @property $municipio
 * @property $otra_inst
 * @property $nombre_servicio
 * @property $orientacion
 * @property $tipo_atencion
 * @property $defensoria_id
 * @property $tipologia_id
 * @property $tipo_denuncia
 * @property $estado_orientaciones
 * @property $estado_actual
 * @property $color
 * @property $created_at
 * @property $updated_at
 *
 * @property Oficina $oficina
 * @property DenunciasTipologia $denunciasTipologia
 * @property DenunciasTerapia[] $denunciasTerapias
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DenunciasDenuncia extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['f_denuncia', 'nro_atencion', 'inhabilitado', 'ingreso', 'especifica_ingreso', 'descripcion', 'opinion', 'historia', 'completa', 'archivada', 'procedencia', 'municipio', 'otra_inst', 'nombre_servicio', 'orientacion', 'tipo_atencion', 'defensoria_id', 'tipologia_id', 'tipo_denuncia', 'estado_orientaciones', 'estado_actual', 'color'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function oficina()
    {
        return $this->belongsTo(\App\Models\Oficina::class, 'defensoria_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function denunciasTipologia()
    {
        return $this->belongsTo(\App\Models\DenunciasTipologia::class, 'tipologia_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function denunciasTerapias()
    {
        return $this->hasMany(\App\Models\DenunciasTerapia::class, 'id', 'denuncia_id');
    }
    
}
