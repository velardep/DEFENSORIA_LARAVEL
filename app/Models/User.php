<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Representa a un Usuario del sistema
 * 
 * Class User
 *
 * @property $id
 * @property $nombre
 * @property $email
 * @property $password
 * @property $rol_id
 * @property $oficina_id
 *
 * @property Oficina $oficina
 * @property Role $role
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class User extends Authenticatable
{
    // No se registran timestamps automáticos (created_at / updated_at)
    public $timestamps = false; 

    // Nombre de la tabla en la base de datos
    protected $table = 'users'; 

    // Paginación por defecto
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'email','password', 'rol_id', 'oficina_id'];

    // Atributos protegidos
    protected $hidden = ['password', 'remember_token'];

    // Relación muchos a uno con Oficina. Cada usuario está asignado a una única oficina. 
    // Varios usuarios pueden pertenecer a la misma oficina.
    public function oficina()
    {
        return $this->belongsTo(\App\Models\Oficina::class, 'oficina_id', 'id');
    }
    
    // Relación muchos a uno con Role. Cada usuario tiene asignado un único rol.
    // Muchos usuarios pueden compartir el mismo rol.
    public function role()
    {
        return $this->belongsTo(\App\Models\Role::class, 'rol_id', 'id');
    }
    
}
