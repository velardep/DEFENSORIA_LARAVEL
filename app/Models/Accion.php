<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Accion
 *
 * @property $id
 * @property $acciones
 * @property $fecha_hora
 * @property $tecnico
 * @property $denuncia_id
 *
 * @property Denuncia $denuncia
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Accion extends Model
{
    public $timestamps = false; // 👈 Agrega esto

    
    protected $table = 'accion'; // 👈 Laravel sabrá qué tabla usar


    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['acciones', 'fecha', 'tecnico', 'denuncia_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function denuncia()
    {
        return $this->belongsTo(Denuncia::class);
    }
    
}
