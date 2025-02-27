<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DenunciasTerapia
 *
 * @property $id
 * @property $otro_tipo
 * @property $otro_documento
 * @property $derivacion
 * @property $denuncia_id
 * @property $croquis
 * @property $documento_otro
 * @property $inf_psicologico
 * @property $inf_social
 * @property $violencia_economica
 * @property $violencia_fisica
 * @property $violencia_otro
 * @property $violencia_psicologica
 * @property $violencia_sexual
 * @property $observaciones
 * @property $created_at
 * @property $updated_at
 *
 * @property DenunciasDenuncia $denunciasDenuncia
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DenunciasTerapia extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['otro_tipo', 'otro_documento', 'derivacion', 'denuncia_id', 'croquis', 'documento_otro', 'inf_psicologico', 'inf_social', 'violencia_economica', 'violencia_fisica', 'violencia_otro', 'violencia_psicologica', 'violencia_sexual', 'observaciones'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function denunciasDenuncia()
    {
        return $this->belongsTo(\App\Models\DenunciasDenuncia::class, 'denuncia_id', 'id');
    }
    
}
