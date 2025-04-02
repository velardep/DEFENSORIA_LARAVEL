<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FamiliaVictima
 *
 * @property $id
 * @property $nombre
 * @property $apellidos
 * @property $parentesco
 * @property $sexo
 * @property $edad
 * @property $ocupacion
 * @property $observacion
 * @property $victima_id
 *
 * @property Victima $victima
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class FamiliaVictima extends Model
{
    // No se registran timestamps automáticos (created_at / updated_at)
    public $timestamps = false; 

    // Nombre de la tabla en la base de datos
    protected $table = 'familia_victima'; 
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'apellidos', 'parentesco', 'sexo', 'edad', 'ocupacion', 'observacion', 'victima_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function victima()
    {
        return $this->belongsTo(\App\Models\Victima::class, 'victima_id', 'id');
    }
    
}
