<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Oficina
 *
 * @property $id
 * @property $nombre_oficina
 * @property $email
 * @property $telefono_oficina
 * @property $idtipo_oficina
 * @property $condicion
 * @property $direccion
 * @property $created_at
 * @property $updated_at
 *
 * @property TipoOficina $tipoOficina
 * @property DenunciasDenuncia[] $denunciasDenuncias
 * @property Usuario[] $usuarios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Oficina extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre_oficina', 'email', 'telefono_oficina', 'idtipo_oficina', 'condicion', 'direccion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipoOficina()
    {
        return $this->belongsTo(\App\Models\TipoOficina::class, 'idtipo_oficina', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function denunciasDenuncias()
    {
        return $this->hasMany(\App\Models\DenunciasDenuncia::class, 'id', 'defensoria_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function usuarios()
    {
        return $this->hasMany(\App\Models\Usuario::class, 'id', 'id_oficinas');
    }
    
}
