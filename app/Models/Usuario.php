<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 *
 * @property $id
 * @property $password
 * @property $ultimo_acceso
 * @property $super_usuario
 * @property $nombre_usuario
 * @property $nombre
 * @property $apellidos
 * @property $correo
 * @property $is_staff
 * @property $activo
 * @property $date_joined
 * @property $acceso
 * @property $id_oficinas
 * @property $jerarquia
 * @property $created_at
 * @property $updated_at
 *
 * @property Oficina $oficina
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Usuario extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['ultimo_acceso', 'super_usuario', 'nombre_usuario', 'nombre', 'apellidos', 'correo', 'is_staff', 'activo', 'date_joined', 'acceso', 'id_oficinas', 'jerarquia'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function oficina()
    {
        return $this->belongsTo(\App\Models\Oficina::class, 'id_oficinas', 'id');
    }
    
}
