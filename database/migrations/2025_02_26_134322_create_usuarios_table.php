<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Migración para usuarios
return new class extends Migration {
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('password', 128);
            $table->timestamp('ultimo_acceso')->nullable();
            $table->boolean('super_usuario');
            $table->string('nombre_usuario', 150);
            $table->string('nombre', 30);
            $table->string('apellidos', 30);
            $table->string('correo', 254);
            $table->boolean('is_staff');
            $table->boolean('activo');
            $table->timestamp('date_joined');
            $table->integer('acceso')->nullable();
            $table->foreignId('id_oficinas')->constrained('oficinas')->onDelete('cascade');
            $table->integer('jerarquia')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('usuarios');
    }

};