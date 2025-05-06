<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Representa una acción realizada dentro del contexto de una denuncia,
 * usualmente registrada por un técnico o funcionario.
 * 
 * Class Accion
 *
 * @property $id
 * @property $acciones
 * @property $fecha_hora
 * @property $tecnico
 * @property $denuncia_id
 * @property $user_id
 * @property $oficina_id
 * 
 * @property Denuncia $denuncia
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Accion extends Model
{
    // No se registran timestamps automáticos (created_at / updated_at)
    public $timestamps = false; 
    
    // Nombre de la tabla en la base de datos
    protected $table = 'accion'; 

    // Paginación por defecto
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['acciones', 'fecha', 'tecnico', 'denuncia_id', 'user_id', 'oficina_id'];


    // Relación muchos a uno con Denuncia. Muchas acciones pueden pertenecer a una única denuncia.
    public function denuncia()
    {
        return $this->belongsTo(Denuncia::class);
    }
    
    // Relación muchos a uno con User. Muchas acciones pueden ser realizadas por un mismo usuario.
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
