<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Representa la relación entre un delito y las denuncias en las que está presente.
 * 
 * Class Violencia
 *
 * @property $id
 * @property $nombre
 * @property $id_tipo_violencia
 *
 * @property Denuncia[] $denuncias
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Delito extends Model
{
    // No se registran timestamps automáticos (created_at / updated_at)
    public $timestamps = false; 

    // Nombre de la tabla en la base de datos
    protected $table = 'delito'; 

    // Paginación por defecto
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre_delito'];

    // Relación muchos a muchos con el modelo Denuncia.
    public function denuncias()
    {
        return $this->belongsToMany(Denuncia::class, 'delito_denuncia', 'delito_id', 'denuncia_id');
    }

    
}
