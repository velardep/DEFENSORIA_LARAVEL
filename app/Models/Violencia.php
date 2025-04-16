<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Violencia
 *
 * @property $id
 * @property $nombre
 * @property $id_tipo_violencia
 *
 * @property TipoViolencia $tipoViolencia
 * @property Denuncium[] $denuncias
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Violencia extends Model
{
    public $timestamps = false; // 👈 Agrega esto

    protected $table = 'violencia'; // 👈 Laravel sabrá qué tabla usar

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'id_tipo_violencia'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipoViolencia()
    {
        return $this->belongsTo(\App\Models\TipoViolencia::class, 'id_tipo_violencia', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function denuncias()
    {
        return $this->hasMany(\App\Models\Denuncium::class, 'id', 'id_violencia');
    }
    
}
