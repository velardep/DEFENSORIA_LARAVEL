<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Domicilio
 *
 * @property $id
 * @property $zona_barrio
 * @property $avenida_calle
 * @property $nom_edificio
 * @property $telefono_domicilio
 * @property $num_distrito
 * @property $num_vivienda
 * @property $num_piso_departamento
 * @property $lugar_domicilio
 * @property $especifique
 *
 * @property Agresor[] $agresors
 * @property Victima[] $victimas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Domicilio extends Model
{
    public $timestamps = false; // 👈 Agrega esto

    protected $table = 'domicilio'; // 👈 Laravel sabrá qué tabla usar

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['zona_barrio', 'avenida_calle', 'nom_edificio', 'telefono_domicilio', 'num_distrito', 
    'num_vivienda', 'num_piso_departamento', 'lugar_domicilio', 'especifique', 'id_victima', 'id_agresor'];


    public function victima()
    {
        return $this->belongsTo(\App\Models\Victima::class, 'id_victima');
    }
    
    public function agresor()
    {
        return $this->belongsTo(\App\Models\Agresor::class, 'id_agresor');
    }
    
}
