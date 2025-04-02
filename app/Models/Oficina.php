<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Oficina
 *
 * @property $id
 * @property $nombre
 * @property $direccion
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Oficina extends Model
{
    // No se registran timestamps automáticos (created_at / updated_at)
    public $timestamps = false; 

    // Nombre de la tabla en la base de datos
    protected $table = 'oficinas'; 

    // Paginación por defecto
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'direccion'];


    public function getInicialesAttribute()
{
    // Ejemplo: "Central" => "CN", "Defensoría de la Mujer" => "DM"
    return collect(explode(' ', $this->nombre))
        ->map(fn($palabra) => strtoupper(substr($palabra, 0, 1)))
        ->join('');
}

}
