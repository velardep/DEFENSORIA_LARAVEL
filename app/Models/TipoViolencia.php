<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoViolencia
 *
 * @property $id
 * @property $nombre
 * @property $condicion
 *
 * @property Violencia[] $violencias
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TipoViolencia extends Model
{
    public $timestamps = false; // 👈 Agrega esto

    protected $table = 'tipo_violencia'; // 👈 Laravel sabrá qué tabla usar

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'condicion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function violencias()
    {
        return $this->hasMany(\App\Models\Violencia::class, 'id', 'id_tipo_violencia');
    }
    
}
