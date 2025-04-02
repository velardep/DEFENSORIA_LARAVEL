<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Representa una denuncia registrada en el sistema, asociada a una víctima, un agresor, 
 * posibles tipos de violencia y acciones de seguimiento.
 * 
 * Class Denuncia
 *
 * @property $id
 * @property $fecha
 * @property $departamento
 * @property $nombre_servicio
 * @property $municipio
 * @property $num_caso
 * @property $cod_slim
 * @property $id_agresor
 * @property $id_tipo_violencia
 * @property $id_victima
 * @property $estado
 * @property $id_violencia
 * @property $forma_ingreso
 * @property $denuncia_previa
 * @property $testimonio
 * @property $num_juzgado
 * @property $delitos_penales
 * @property $provisional
 * @property $user_id
 * @property $oficina_id
 * @property $es_derivada

 * @property Agresor $agresor
 * @property Victima $victima
 * @property TipoViolencia $tipoviolencias
 * @property Violencia $violencia
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Denuncia extends Model
{
    // No se registran timestamps automáticos (created_at / updated_at)
    public $timestamps = false; 

    // Nombre de la tabla en la base de datos
    protected $table = 'denuncia'; 

    // Paginación por defecto
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['fecha', 'departamento', 'nombre_servicio', 'municipio', 'num_caso', 
    'cod_slim', 'id_agresor', 'id_victima', 'estado', 'violencia_fisica', 'violencia_psicologica',
    'violencia_sexual', 'violencia_economica', 'forma_ingreso', 'denuncia_previa', 'testimonio', 'distrito', 'distrito_rural',
    'zona_barrio', 'avenida_calle', 'nom_edificio', 'num_vivienda', 'lugar_domicilio', 'especifique', 'delitos_penales', 
    'emblematico', 'num_juzgado', 'provisional', 'user_id', 'oficina_id', 'es_derivada', 'violencia_feminicida'];
    
    //Relación muchos a uno con Agresor, puede haber muchas denuncias para un mismo agresor.
    public function agresor()
    {
        return $this->belongsTo(\App\Models\Agresor::class, 'id_agresor', 'id');
    }
    
    // Relación muchos a uno con Victima, puede haber muchas denuncias para una misma víctima.
    public function victima()
    {
        return $this->belongsTo(\App\Models\Victima::class, 'id_victima', 'id');
    }
    
    // Relación muchos a uno con TipoViolencia, una denuncia puede referirse a un tipo general de violencia.
    public function tipoviolencias()
    {
        return $this->belongsTo(\App\Models\TipoViolencia::class, 'id_tipo_violencia', 'id');
    }

    // Relación muchos a uno con Violencia, que representa una categoría específica dentro del tipo de violencia.
    public function violencia()
    {
        return $this->belongsTo(\App\Models\Violencia::class, 'id_violencia', 'id');
    }
  
    // Relación uno a muchos con Accion, una denuncia puede tener muchas acciones asociadas (seguimientos, registros).
    public function acciones()
    {
        return $this->hasMany(\App\Models\Accion::class, 'denuncia_id', 'id');
    }
    
    // Relación muchos a uno con User, una denuncia es registrada por un único usuario.
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id', 'id');
    }

    // Relación uno a muchos con Asignaciones, una denuncia puede tener muchas asignaciones asociadas.
    public function asignaciones()
    {
        return $this->hasMany(Asignacion::class, 'denuncia_id');
    }

   
}
