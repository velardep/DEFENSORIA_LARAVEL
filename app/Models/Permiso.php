<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Permiso
 *
 * @property $id
 * @property $nombre_permiso
 * @property $condicion_permiso
 * @property $created_at
 * @property $updated_at
 *
 * @property RolPermiso[] $rolPermisos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Permiso extends Model
{
    use HasFactory;

    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre_permiso', 'condicion_permiso'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rolPermisos()
    {
        return $this->hasMany(\App\Models\RolPermiso::class, 'id', 'id_permiso');
    }
    

}

