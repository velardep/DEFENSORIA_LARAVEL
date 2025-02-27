<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Migración para denuncias_denuncias
return new class extends Migration {
    public function up()
    {
        Schema::create('denuncias_denuncias', function (Blueprint $table) {
            $table->id();
            $table->date('f_denuncia');
            $table->string('nro_atencion', 30);
            $table->boolean('inhabilitado');
            $table->string('ingreso', 1)->nullable();
            $table->string('especifica_ingreso', 255)->nullable();
            $table->text('descripcion')->nullable();
            $table->boolean('opinion')->nullable();
            $table->text('historia')->nullable();
            $table->boolean('completa')->nullable();
            $table->boolean('archivada');
            $table->string('procedencia', 1)->nullable();
            $table->string('municipio', 160)->nullable();
            $table->string('otra_inst', 160)->nullable();
            $table->string('nombre_servicio', 160)->nullable();
            $table->boolean('orientacion')->nullable();
            $table->string('tipo_atencion', 1)->nullable();
            $table->foreignId('defensoria_id')->constrained('oficinas')->onDelete('cascade');
            $table->foreignId('tipologia_id')->nullable()->constrained('denuncias_tipologias')->onDelete('cascade');
            $table->string('tipo_denuncia', 2);
            $table->string('estado_orientaciones', 2)->nullable();
            $table->string('estado_actual', 200)->nullable();
            $table->string('color', 20)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('denuncias_denuncias');
    }
};

