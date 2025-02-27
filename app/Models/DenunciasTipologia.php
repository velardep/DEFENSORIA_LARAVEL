<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DenunciasTipologia
 *
 * @property $id
 * @property $tipologia_id
 * @property $created_at
 * @property $updated_at
 *
 * @property DenunciasDenuncia[] $denunciasDenuncias
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DenunciasTipologia extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['tipologia_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function denunciasDenuncias()
    {
        return $this->hasMany(\App\Models\DenunciasDenuncia::class, 'id', 'tipologia_id');
    }
    
}
