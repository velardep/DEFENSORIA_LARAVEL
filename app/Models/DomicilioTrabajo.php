<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DomicilioTrabajo
 * 
 * @property $id
 * @property $nombre_empresa
 * @property $zona_barrio
 * @property $avenida_calle
 * @property $telefono_trabajo
 * @property $num_edificio
 * @property $agresor
 *
 * @property Agresor[] $agresor
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DomicilioTrabajo extends Model
{
    public $timestamps = false; // 👈 Agrega esto

    protected $table = 'domicilio_trabajo'; // 👈 Laravel sabrá qué tabla usar

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre_empresa', 'zona_barrio', 'avenida_calle', 'telefono_trabajo', 'num_edificio', 'id_agresor'];


    public function agresor()
    {
        return $this->belongsTo(\App\Models\Agresor::class, 'id_agresor', 'id');
    }
    

    
}
