<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Representa una Orientacion creada por parte de un Usuario 
 * 
 * Class Orientacion
 *
 * @property $id
 * @property $equipo
 * @property $profesional_asignado
 * @property $fecha_ingreso
 * @property $orientacion
 * @property $nombre_persona
 * @property $edad
 * @property $telefono
 * @property $barrio
 * @property $motivo
 * @property $resutado_entrevista
 * @property $num_caso
 * 
 * @property $user_id
 * @property $oficina_id
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Orientacion extends Model
{
    // No se registran timestamps automáticos (created_at / updated_at)
    public $timestamps = false;

    // Nombre de la tabla en la base de datos
    protected $table = 'orientacion';

    // Paginación por defecto
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['equipo', 'profesional_asignado', 'fecha_ingreso', 'orientacion', 
    'nombre_persona', 'edad', 'telefono', 'barrio', 'motivo', 'resutado_entrevista', 'num_caso', 'user_id', 'oficina_id'];


    // Relación muchos a uno con User.Cada orientación es registrada por un único usuario 
    public function user() {
        return $this->belongsTo(User::class);
    }
    
    // Relación muchos a uno con Oficina. Cada orientación está asociada a una única oficina donde se llevó a cabo.
    public function oficina() {
        return $this->belongsTo(Oficina::class);
    }
    
}
