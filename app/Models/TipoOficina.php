<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoOficina
 *
 * @property $id
 * @property $nombre_tipo
 * @property $condicion
 * @property $created_at
 * @property $updated_at
 *
 * @property Oficina[] $oficinas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TipoOficina extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre_tipo', 'condicion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function oficinas()
    {
        return $this->hasMany(\App\Models\Oficina::class, 'id', 'idtipo_oficina');
    }
    
}
