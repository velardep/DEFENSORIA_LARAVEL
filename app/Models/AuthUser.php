<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthUser extends Model
{
    use HasFactory;

    protected $table = 'auth_user';
    protected $primaryKey = 'id';
    public $incrementing = true;  // Indica que es autoincremental
    protected $keyType = 'int';  // Tipo de dato de la clave primaria
    public $timestamps = false; // No usamos created_at y updated_at

    protected $fillable = [
        'password', 'last_login', 'is_superuser', 'username', 'first_name',
        'last_name', 'email', 'is_staff', 'is_active', 'date_joined',
        'acces', 'defensoria_id', 'jerarquia'
    ];
    protected $casts = [
        'is_superuser' => 'boolean',
        'is_staff' => 'boolean',
        'is_active' => 'boolean',
        'last_login' => 'datetime',
        'date_joined' => 'datetime'
    ];
}

