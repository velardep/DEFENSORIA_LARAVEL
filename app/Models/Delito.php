<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Violencia
 *
 * @property $id
 * @property $nombre
 * @property $id_tipo_violencia
 *
 * @property Denuncium[] $denuncias
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Delito extends Model
{
    public $timestamps = false; // 👈 Agrega esto

    protected $table = 'delito'; // 👈 Laravel sabrá qué tabla usar

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre_delito'];


    
    
    public function denuncias()
{
    return $this->belongsToMany(Denuncia::class, 'delito_denuncia', 'delito_id', 'denuncia_id');
}

    
}
