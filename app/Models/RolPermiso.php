<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RolPermiso
 *
 * @property $id
 * @property $id_rol
 * @property $id_permiso
 * @property $created_at
 * @property $updated_at
 *
 * @property Permiso $permiso
 * @property Role $role
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class RolPermiso extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_rol', 'id_permiso'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function permiso()
    {
        return $this->belongsTo(\App\Models\Permiso::class, 'id_permiso', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function role()
    {
        return $this->belongsTo(\App\Models\Role::class, 'id_rol', 'id');
    }
    
}
