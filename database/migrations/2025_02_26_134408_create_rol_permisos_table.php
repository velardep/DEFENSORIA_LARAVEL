<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Migración para rol_permisos
return new class extends Migration {
    public function up()
    {
        Schema::create('rol_permisos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_rol')->constrained('roles')->onDelete('cascade');
            $table->foreignId('id_permiso')->constrained('permisos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rol_permisos');
    }
};

