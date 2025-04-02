<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Representa la creacion de una Violencia especifica la cual se 
 * clasificara por medio de Tipo Violencia
 * 
 * Class Violencia
 *
 * @property $id
 * @property $nombre
 * @property $id_tipo_violencia
 *
 * @property TipoViolencia $tipoViolencia
 * @property Denuncia[] $denuncias
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Violencia extends Model
{
    // No se registran timestamps automáticos (created_at / updated_at)
    public $timestamps = false; 

    // Nombre de la tabla en la base de datos
    protected $table = 'violencia'; 

    // Paginación por defecto
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'id_tipo_violencia'];


    // Relación muchos a uno. Cada tipo específico de violencia (por ejemplo, “Golpes”, “Amenazas”, “Violación”) 
    // pertenece a un Tipo de Violencia general (como “Física”, “Psicológica”, “Sexual”).
    public function tipoViolencia()
    {
        return $this->belongsTo(\App\Models\TipoViolencia::class, 'id_tipo_violencia', 'id');
    }
    
    // Relación uno a muchos. Una forma de violencia específica puede estar asociada a muchas denuncias.
    public function denuncias()
    {
        return $this->hasMany(Denuncia::class, 'id_violencia', 'id');
    }

    
}
