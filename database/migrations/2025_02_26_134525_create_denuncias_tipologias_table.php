<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Migración para denuncias_tipologias
return new class extends Migration {
    public function up()
    {
        Schema::create('denuncias_tipologias', function (Blueprint $table) {
            $table->id();
            $table->integer('tipologia_id')->constrained('tipologias')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('denuncias_tipologias');
    }
};

