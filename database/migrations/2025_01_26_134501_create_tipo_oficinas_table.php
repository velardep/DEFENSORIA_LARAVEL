<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Migración para tipo_oficinas
return new class extends Migration {
    public function up()
    {
        Schema::create('tipo_oficinas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_tipo', 255);
            $table->integer('condicion');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tipo_oficinas');
    }
};

