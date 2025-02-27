<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Role
 *
 * @property $id
 * @property $nombre_rol
 * @property $condicion_rol
 * @property $created_at
 * @property $updated_at
 *
 * @property Persona[] $personas
 * @property RolPermiso[] $rolPermisos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Role extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre_rol', 'condicion_rol'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function personas()
    {
        return $this->hasMany(\App\Models\Persona::class, 'id', 'id_rol');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rolPermisos()
    {
        return $this->hasMany(\App\Models\RolPermiso::class, 'id', 'id_rol');
    }
    
}
