<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Representa la creacion de una Victima
 * 
 * Class Victima
 *
 * @property $id
 * @property $nombre
 * @property $ap_paterno
 * @property $ap_materno
 * @property $sexo
 * @property $lugr_nacimiento
 * @property $fecha_nacimiento
 * @property $edad
 * @property $residencia_habitual
 * @property $estado_civil
 * @property $rel_victima_agresor
 * @property $hijos
 * @property $logro_educativo
 * @property $actividad
 * @property $ingreso
 * @property $monto
 * @property $idioma
 * @property $especifique_idioma
 * @property $id_documento
 * 
 * @property $distrito
 * @property $distrito_rural
 * @property $zona_barrio
 * @property $avenida_calle
 * @property $nom_edificio
 * @property $telefono_referencia
 * @property $num_vivienda
 * @property $num_piso_departamento
 * @property $lugar_domicilio
 * @property $especifique
 * 
 * @property $discapacidad
 * @property $grado_discapacidad
 * 
 * @property $adulto_mayor
 * 
 * @property $provisional
 * @property $user_id
 * @property $denuncia_id
 * 
 * @property Denuncia[] $denuncias
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Victima extends Model
{
    // No se registran timestamps automáticos (created_at / updated_at)
    public $timestamps = false;

    // Nombre de la tabla en la base de datos
    protected $table = 'victima'; 

    // Paginación por defecto
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'ap_paterno', 'ap_materno', 'sexo', 'lugr_nacimiento', 'fecha_nacimiento', 'edad', 
    'residencia_habitual', 'estado_civil', 'rel_victima_agresor', 'hijos', 'logro_educativo', 'actividad', 'ingreso', 
    'monto', 'idioma', 'especifique_idioma', 'especifique_residencia', 'celular', 'especifique_nacimiento',
    'num_documento', 'expedido', 'tipo_documento', 'distrito', 'distrito_rural', 'zona_barrio', 'avenida_calle', 'nom_edificio', 'telefono_referencia', 
    'num_vivienda', 'num_piso_departamento', 'lugar_domicilio', 'especifique', 'provisional', 'user_id', 'denuncia_id',
    'adulto_mayor', 'discapacidad', 'grado_discapacidad'];

    /**
     * Relacion muchos a uno. Una victima puede tener muchas denuncias.
     * 
     * Permite que una misma víctima pueda haber sido parte de múltiples denuncias a lo largo del tiempo. Es fundamental para:
     * reportes históricos, análisis de reincidencia, estadísticas por personas, trazabilidad completa de los casos asociados 
     * a una víctima.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function denuncias()
    {
        return $this->hasMany(\App\Models\Denuncia::class, 'id', 'id_victima');
    }

    /**
     * 
     * Relacion uno a uno. Una vitima esta vinculada a una sola denuncia
     * 
     * Esta segunda relación fue implementada por necesidad operativa, no tanto por una lógica de dominio. Sirve para:
     * detectar víctimas con una denuncia pendiente de completar,
     * evitar duplicación accidental de víctimas en el registro de nuevos casos,
     * continuar un proceso que quedó incompleto por cierres inesperados, errores o pausas.
     * 
     * En otras palabras: Es una relación auxiliar, pensada para mejorar la usabilidad y confiabilidad del flujo de trabajo.
     *  
     */ 
    public function denuncia()
    {
        return $this->belongsTo(\App\Models\Denuncia::class, 'denuncia_id');
    }

    /**
     * ¿Por qué no hay conflicto entre ambas?
     * Porque cumplen roles distintos:
     * La relación denuncias() nunca se usa para saber si una víctima tiene una denuncia incompleta.
     * La relación denuncia() no se usa para recuperar el historial completo, sino para el caso puntual del 
     * buscador de “víctimas incompletas”.
     * 
     */
    
     public function familiares()
    {
        return $this->hasMany(FamiliaVictima::class);
    }

}
