<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthGroup extends Model
{
    use HasFactory;

    protected $table = 'auth_group';
    protected $primaryKey = 'id';
    public $incrementing = true;  // Indica que es autoincremental
    protected $keyType = 'int';  // Tipo de dato de la clave primaria
    public $timestamps = false; // No usamos created_at y updated_at

    protected $fillable = [
        'name'
    ];
    
}

