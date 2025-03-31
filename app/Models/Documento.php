<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Documento
 *
 * @property $id
 * @property $numero
 * @property $expedido
 * @property $id_tipo_documento
 *
 * @property TipoDocumento $tipoDocumento
 * @property Agresor[] $agresors
 * @property Victima[] $victimas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Documento extends Model
{
    public $timestamps = false; // 👈 Agrega esto

    protected $table = 'documento'; // 👈 Laravel sabrá qué tabla usar

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['numero', 'expedido', 'id_tipo_documento'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipoDocumento()
    {
        return $this->belongsTo(\App\Models\TipoDocumento::class, 'id_tipo_documento', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function agresors()
    {
        return $this->hasMany(\App\Models\Agresor::class, 'id', 'id_documento');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function victimas()
    {
        return $this->hasMany(\App\Models\Victima::class, 'id', 'id_documento');
    }
    
}
