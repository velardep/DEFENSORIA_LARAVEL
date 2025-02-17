<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oficina extends Model
{
    use HasFactory;

    protected $table = 'oficina'; // Asegúrate de que este nombre coincida con tu tabla en la base de datos
    protected $primaryKey = 'idoficina'; // Clave primaria de la tabla

    public $timestamps = false; // ⚠️ Desactiva `created_at` y `updated_at`

    protected $fillable = ['idoficina', 'nombreoficina', 'telefonooficina', 'idtipo_oficina', 'condicionoficina', 'direccionoficina']; // Define los campos que puedes modificar
}

