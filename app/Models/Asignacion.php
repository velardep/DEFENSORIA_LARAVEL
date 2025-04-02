<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Asignacion
 * Representa una asignación de un técnico (usuario) a una denuncia en el sistema.
 * Cada asignación tiene una fecha y pertenece a una oficina.
 *
 * @property $id
 * @property $denuncia_id
 * @property $user_id
 * @property $fecha
 * @property $oficina_id
 *
 * @property Denuncia $denuncia
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Asignacion extends Model
{
    // No se registran timestamps automáticos (created_at / updated_at)
    public $timestamps = false; 

    // Nombre de la tabla en la base de datos
    protected $perPage = 20;

    // Paginación por defecto
    protected $table = 'asignaciones';


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['denuncia_id', 'user_id', 'fecha', 'oficina_id'];


    // Relación muchos a uno con Denuncia. Muchas asignaciones pueden estar vinculadas a una misma denuncia.
    public function denuncia()
    {
        return $this->belongsTo(Denuncia::class);
    }
    
    
    // Relación muchos a uno con User. Muchas asignaciones pueden ser hechas a un mismo usuario.
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id', 'id');
    }
    
}
