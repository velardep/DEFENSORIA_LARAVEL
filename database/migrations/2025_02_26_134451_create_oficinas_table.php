<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Migración para oficinas
return new class extends Migration {
    public function up()
    {
        Schema::create('oficinas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_oficina', 255);
            $table->string('email', 255);
            $table->string('telefono_oficina', 255);
            $table->foreignId('idtipo_oficina')->constrained('tipo_oficinas')->onDelete('cascade');
            $table->integer('condicion');
            $table->string('direccion', 255);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('oficinas');
    }
};

