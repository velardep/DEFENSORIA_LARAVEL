<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Migración para denuncias_personas
return new class extends Migration {
    public function up()
    {
        Schema::create('denuncias_personas', function (Blueprint $table) {
            $table->id();
            $table->string('nombres', 100);
            $table->string('apellidos', 100);
            $table->char('actividad', 1)->nullable();
            $table->boolean('anonimo')->nullable();
            $table->char('c_nac', 1)->nullable();
            $table->char('estado_civil', 1)->nullable();
            $table->char('estudia', 1)->nullable();
            $table->char('doc_expedido', 2)->nullable();
            $table->integer('edad')->nullable();
            $table->date('f_nac')->nullable();
            $table->string('g_instruccion', 40)->nullable();
            $table->char('gestante', 1)->nullable();
            $table->char('hijos', 1)->nullable();
            $table->char('idioma', 1)->nullable();
            $table->char('ingr_eco', 1)->nullable();
            $table->char('lgro_educa', 1)->nullable();
            $table->string('lug_nacimiento', 160)->nullable();
            $table->string('lug_residencia', 160)->nullable();
            $table->string('lugar_trabajo', 40)->nullable();
            $table->string('monto', 10)->nullable();
            $table->string('nro_documento', 40)->nullable();
            $table->char('sexo', 1);
            $table->char('tipo_doc', 1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('denuncias_personas');
    }
};
