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
            $table->char('actividad', 100)->nullable();
            $table->char('anonimo', 100)->nullable();
            $table->char('c_nac', 100)->nullable();
            $table->char('estado_civil', 100)->nullable();
            $table->char('estudia', 30)->nullable();
            $table->char('doc_expedido', 40)->nullable();
            $table->integer('edad')->nullable();
            $table->date('f_nac')->nullable();
            $table->char('g_instruccion', 100)->nullable();
            $table->char('gestante', 50)->nullable();
            $table->char('hijos', 50)->nullable();
            $table->char('idioma', 100)->nullable();
            $table->char('ingr_eco', 50)->nullable();
            $table->char('lgro_educa', 100)->nullable();
            $table->char('lug_nacimiento', 160)->nullable();
            $table->char('lug_residencia', 160)->nullable();
            $table->char('lugar_trabajo', 160)->nullable();
            $table->date('modificate')->nullable();
            $table->char('monto', 30)->nullable();
            $table->char('nro_documento', 40)->nullable();
            $table->char('nro_hijos', 30)->nullable();
            $table->char('observacion', 100)->nullable();
            $table->char('ocupacion', 100)->nullable();
            $table->char('otro_idioma', 100)->nullable();
            $table->char('parentesco', 100)->nullable();
            $table->char('procedencia', 100)->nullable();
            $table->char('rel_agresor', 100)->nullable();
            $table->char('sexo', 50);
            $table->char('tipo_doc', 50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('denuncias_personas');
    }
};
