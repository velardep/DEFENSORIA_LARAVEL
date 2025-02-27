<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Migración para denuncias_terapias
return new class extends Migration {
    public function up()
    {
        Schema::create('denuncias_terapias', function (Blueprint $table) {
            $table->id();
            $table->string('otro_tipo', 100)->nullable();
            $table->string('otro_documento', 100)->nullable();
            $table->text('derivacion')->nullable();
            $table->foreignId('denuncia_id')->constrained('denuncias_denuncias')->onDelete('cascade');
            $table->boolean('croquis');
            $table->boolean('documento_otro');
            $table->boolean('inf_psicologico');
            $table->boolean('inf_social');
            $table->boolean('violencia_economica');
            $table->boolean('violencia_fisica');
            $table->boolean('violencia_otro');
            $table->boolean('violencia_psicologica');
            $table->boolean('violencia_sexual');
            $table->text('observaciones')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('denuncias_terapias');
    }
};
