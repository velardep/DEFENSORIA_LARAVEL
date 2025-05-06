<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Intervencion
 *
 * @property $id
 * @property $num_ficha
 * @property $num_equipo
 * @property $num_tar
 * @property $nombre_usuaria
 * 
 * @property $user_id
 * @property $oficina_id
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Intervencion extends Model
{
    // No se registran timestamps automáticos (created_at / updated_at)
    public $timestamps = false; 

    // Nombre de la tabla en la base de datos
    protected $table = 'intervencion'; 
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['num_ficha', 'num_equipo', 'num_tar', 'nombre_usuaria', 'user_id', 'oficina_id'];

    
    // Relación muchos a uno con User.Cada orientación es registrada por un único usuario 
    public function user() {
        return $this->belongsTo(User::class);
    }
    
    // Relación muchos a uno con Oficina. Cada orientación está asociada a una única oficina donde se llevó a cabo.
    public function oficina() {
        return $this->belongsTo(Oficina::class);
    }

}
