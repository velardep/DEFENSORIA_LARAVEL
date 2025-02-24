<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    use HasFactory;

    protected $table = 'permiso'; // Asegúrate de que este nombre coincida con tu tabla en la base de datos
    protected $primaryKey = 'idpermiso'; // Clave primaria de la tabla

    public $timestamps = false; // ⚠️ Desactiva `created_at` y `updated_at`

    protected $fillable = ['idpermiso', 'nombrepermiso', 'condicionpermiso']; // Define los campos que puedes modificar
}

