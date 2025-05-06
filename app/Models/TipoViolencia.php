<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Representa La clasificaion que existen entre Violencias (Ej. Violencia Psicologica, Violencia Fisica, etc)
 * 
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
    // No se registran timestamps automáticos (created_at / updated_at)
    public $timestamps = false; 

    // Nombre de la tabla en la base de datos
    protected $table = 'tipo_violencia'; 

    // Paginación por defecto
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'condicion'];


    // Relación uno a muchos con Violencia. Un tipo de violencia  puede tener muchas violencias específicas asociadas 
    public function violencias()
    {
        return $this->hasMany(\App\Models\Violencia::class, 'id', 'id_tipo_violencia');
    }
    
}
