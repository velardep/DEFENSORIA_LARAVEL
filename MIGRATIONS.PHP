<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// 1 Migración para auth_groups
return new class extends Migration {
    public function up()
    {
        Schema::create('auth_groups', function (Blueprint $table) {
            $table->id();
            $table->string('name', 80)->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('auth_groups');
    }
};

// 2 Migración para auth_permissions
return new class extends Migration {
    public function up()
    {
        Schema::create('auth_permissions', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('codename', 100);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('auth_permissions');
    }
};

// 3 Migración para auth_users
return new class extends Migration {
    public function up()
    {
        Schema::create('auth_users', function (Blueprint $table) {
            $table->id();
            $table->string('password', 128);
            $table->timestamp('last_login')->nullable();
            $table->boolean('is_superuser');
            $table->string('username', 150)->unique();
            $table->string('first_name', 30);
            $table->string('last_name', 30);
            $table->string('email', 254)->unique();
            $table->boolean('is_staff');
            $table->boolean('is_active');
            $table->timestamp('date_joined');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('auth_users');
    }
};

// 4 Migración para auth_group_permissions
return new class extends Migration {
    public function up()
    {
        Schema::create('auth_group_permissions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('group_id')->constrained('auth_groups')->onDelete('cascade');
            $table->foreignId('permission_id')->constrained('auth_permissions')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('auth_group_permissions');
    }
};

// 5 Migración para auth_user_groups
return new class extends Migration {
    public function up()
    {
        Schema::create('auth_user_groups', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('auth_users')->onDelete('cascade');
            $table->foreignId('group_id')->constrained('auth_groups')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('auth_user_groups');
    }
};

// 6 Migración para auth_user_user_permissions
return new class extends Migration {
    public function up()
    {
        Schema::create('auth_user_user_permissions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('auth_users')->onDelete('cascade');
            $table->foreignId('permission_id')->constrained('auth_permissions')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('auth_user_user_permissions');
    }
};

// 7 Migración para denuncias_accion
return new class extends Migration {
    public function up()
    {
        Schema::create('denuncias_accion', function (Blueprint $table) {
            $table->id();
            $table->string('tipo', 60);
            $table->char('clase', 2);
            $table->foreignId('denuncia_id')->constrained('denuncias_denuncia')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('denuncias_accion');
    }
};

// 8 Migración para denuncias_actuaciones
return new class extends Migration {
    public function up()
    {
        Schema::create('denuncias_actuaciones', function (Blueprint $table) {
            $table->id();
            $table->date('f_accion');
            $table->text('accion');
            $table->date('f_resultado')->nullable();
            $table->text('resultado')->nullable();
            $table->string('pag_adjuntas', 40);
            $table->foreignId('denuncia_id')->constrained('denuncias_denuncia')->onDelete('cascade');
            $table->foreignId('usuario_id')->constrained('auth_users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('denuncias_actuaciones');
    }
};



// 9 Migración para denuncias_contador
return new class extends Migration {
    public function up()
    {
        Schema::create('denuncias_contador', function (Blueprint $table) {
            $table->id();
            $table->integer('denuncias');
            $table->integer('gestion')->nullable();
            $table->timestamp('modificado');
            $table->foreignId('defensoria_id')->constrained('denuncias_defensoria')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('denuncias_contador');
    }
};

// 10 Migración para denuncias_defensoria
return new class extends Migration {
    public function up()
    {
        Schema::create('denuncias_defensoria', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 120);
            $table->string('direccion', 100)->nullable();
            $table->string('telefono', 11)->nullable();
            $table->string('codigo', 5)->nullable();
            $table->char('procedencia', 1)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('denuncias_defensoria');
    }
};

// 11 Migración para denuncias_denuncia
return new class extends Migration {
    public function up()
    {
        Schema::create('denuncias_denuncia', function (Blueprint $table) {
            $table->id();
            $table->date('f_denuncia');
            $table->string('nro_atencion', 30);
            $table->boolean('inhabilitado');
            $table->foreignId('defensoria_id')->constrained('denuncias_defensoria')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('denuncias_denuncia');
    }
};

// 12 Migración para denuncias_domicilio
return new class extends Migration {
    public function up()
    {
        Schema::create('denuncias_domicilio', function (Blueprint $table) {
            $table->id();
            $table->string('domicilio', 256)->nullable();
            $table->string('telefono', 10)->nullable();
            $table->string('zona', 300)->nullable();
            $table->string('calle', 300)->nullable();
            $table->string('edificio', 300)->nullable();
            $table->string('municipio', 160)->nullable();
            $table->string('telefono2', 10)->nullable();
            $table->string('nro_vivienda', 6)->nullable();
            $table->string('piso_dpto', 2)->nullable();
            $table->string('celular', 8)->nullable();
            $table->string('trabajo', 120)->nullable();
            $table->foreignId('denuncia_id')->nullable()->constrained('denuncias_denuncia')->onDelete('cascade');
            $table->foreignId('persona_id')->nullable()->constrained('denuncias_persona')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('denuncias_domicilio');
    }
};

// 13 Migración para denuncias_emblematico
return new class extends Migration {
    public function up()
    {
        Schema::create('denuncias_emblematico', function (Blueprint $table) {
            $table->id();
            $table->date('create');
            $table->foreignId('denuncia_id')->nullable()->constrained('denuncias_denuncia')->onDelete('cascade');
            $table->foreignId('usuario_id')->constrained('auth_users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('denuncias_emblematico');
    }
};

// 14 Migración para denuncias_estado
return new class extends Migration {
    public function up()
    {
        Schema::create('denuncias_estado', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 120);
            $table->string('tipo', 10)->nullable();
            $table->string('color', 12)->nullable();
            $table->char('procedencia', 1)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('denuncias_estado');
    }
};

// 15 Migración para denuncias_juzgado
return new class extends Migration {
    public function up()
    {
        Schema::create('denuncias_juzgado', function (Blueprint $table) {
            $table->id();
            $table->string('fiscal', 100);
            $table->string('juzgado', 100);
            $table->string('tar', 30);
            $table->string('ianus', 30);
            $table->foreignId('denuncia_id')->constrained('denuncias_denuncia')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('denuncias_juzgado');
    }
};

// 16 Migración para denuncias_logbusquedas
return new class extends Migration {
    public function up()
    {
        Schema::create('denuncias_logbusquedas', function (Blueprint $table) {
            $table->id();
            $table->timestamp('creado');
            $table->text('termino_buscado');
            $table->foreignId('usuario_id')->constrained('auth_users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('denuncias_logbusquedas');
    }
};

// 17 Migración para denuncias_logdenuncia
return new class extends Migration {
    public function up()
    {
        Schema::create('denuncias_logdenuncia', function (Blueprint $table) {
            $table->id();
            $table->string('estado_inicial', 100)->nullable();
            $table->string('estado_nuevo', 100)->nullable();
            $table->string('accion', 255);
            $table->date('create');
            $table->date('modificated');
            $table->foreignId('denuncia_id')->constrained('denuncias_denuncia')->onDelete('cascade');
            $table->foreignId('usuario_id')->constrained('auth_users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('denuncias_logdenuncia');
    }
};

// 18 Migración para denuncias_logestado
return new class extends Migration {
    public function up()
    {
        Schema::create('denuncias_logestado', function (Blueprint $table) {
            $table->id();
            $table->date('create');
            $table->date('modificated');
            $table->boolean('activo')->nullable();
            $table->foreignId('denuncia_id')->constrained('denuncias_denuncia')->onDelete('cascade');
            $table->foreignId('estado_id')->constrained('denuncias_estado')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('denuncias_logestado');
    }
};

// 19 Migración para denuncias_logperfil
return new class extends Migration {
    public function up()
    {
        Schema::create('denuncias_logperfil', function (Blueprint $table) {
            $table->id();
            $table->timestamp('creado');
            $table->foreignId('persona_id')->constrained('denuncias_persona')->onDelete('cascade');
            $table->foreignId('usuario_id')->constrained('auth_users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('denuncias_logperfil');
    }
};

// 20 Migración para denuncias_lugaragresion
return new class extends Migration {
    public function up()
    {
        Schema::create('denuncias_lugaragresion', function (Blueprint $table) {
            $table->id();
            $table->char('lugar', 2);
            $table->string('otro_lugar', 200)->nullable();
            $table->foreignId('denuncia_id')->constrained('denuncias_denuncia')->onDelete('cascade');
            $table->char('distrito', 2)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('denuncias_lugaragresion');
    }
};

// 21 Migración para denuncias_manejadornotificaciones
return new class extends Migration {
    public function up()
    {
        Schema::create('denuncias_manejadornotificaciones', function (Blueprint $table) {
            $table->id();
            $table->timestamp('creado');
            $table->char('meses', 2);
            $table->string('titulo', 100);
            $table->text('cuerpo');
            $table->foreignId('creado_por_id')->constrained('auth_users')->onDelete('cascade');
            $table->char('tipo', 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('denuncias_manejadornotificaciones');
    }
};

// 22 Migración para denuncias_notificaciones
return new class extends Migration {
    public function up()
    {
        Schema::create('denuncias_notificaciones', function (Blueprint $table) {
            $table->id();
            $table->date('f_notificacion');
            $table->text('notificacion');
            $table->boolean('vista');
            $table->date('create');
            $table->date('modificated');
            $table->foreignId('usuario_id')->constrained('auth_users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('denuncias_notificaciones');
    }
};

// 23 Migración para denuncias_penales
return new class extends Migration {
    public function up()
    {
        Schema::create('denuncias_penales', function (Blueprint $table) {
            $table->id();
            $table->string('tipo', 100);
            $table->foreignId('denuncia_id')->constrained('denuncias_denuncia')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('denuncias_penales');
    }
};


// 24 Migración para denuncias_perfilpersona
return new class extends Migration {
    public function up()
    {
        Schema::create('denuncias_perfilpersona', function (Blueprint $table) {
            $table->id();
            $table->boolean('activo');
            $table->date('f_creacion');
            $table->date('f_modificacion');
            $table->foreignId('denuncia_id')->constrained('denuncias_denuncia')->onDelete('cascade');
            $table->foreignId('persona_id')->constrained('denuncias_persona')->onDelete('cascade');
            $table->foreignId('tipo_id');
            $table->integer('edad')->nullable();
            $table->string('parentesco_especifique', 100)->nullable();
            $table->char('parentesco_victima', 2)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('denuncias_perfilpersona');
    }
};

// 25 Migración para denuncias_perfilusuario
return new class extends Migration {
    public function up()
    {
        Schema::create('denuncias_perfilusuario', function (Blueprint $table) {
            $table->id();
            $table->boolean('activo');
            $table->date('create');
            $table->date('modificate');
            $table->foreignId('denuncia_id')->constrained('denuncias_denuncia')->onDelete('cascade');
            $table->foreignId('usuario_id')->constrained('auth_users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('denuncias_perfilusuario');
    }
};

// 26 Migración para denuncias_persona
return new class extends Migration {
    public function up()
    {
        Schema::create('denuncias_persona', function (Blueprint $table) {
            $table->id();
            $table->string('nombres', 100);
            $table->string('apellidos', 100);
            $table->char('actividad', 1)->nullable();
            $table->boolean('anonimo')->nullable();
            $table->char('c_nac', 1)->nullable();
            $table->date('create');
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
            $table->date('modificate');
            $table->string('monto', 10)->nullable();
            $table->string('nro_documento', 40)->nullable();
            $table->char('sexo', 1);
            $table->char('tipo_doc', 1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('denuncias_persona');
    }
};

// 27 Migración para denuncias_persona_tipo
return new class extends Migration {
    public function up()
    {
        Schema::create('denuncias_persona_tipo', function (Blueprint $table) {
            $table->id();
            $table->foreignId('persona_id')->constrained('denuncias_persona')->onDelete('cascade');
            $table->foreignId('tipo_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('denuncias_persona_tipo');
    }
};

// 28 Migración para denuncias_terapia
return new class extends Migration {
    public function up()
    {
        Schema::create('denuncias_terapia', function (Blueprint $table) {
            $table->id();
            $table->string('otro_tipo', 100)->nullable();
            $table->string('otro_documento', 100)->nullable();
            $table->text('derivacion')->nullable();
            $table->foreignId('denuncia_id')->constrained('denuncias_denuncia')->onDelete('cascade');
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
        Schema::dropIfExists('denuncias_terapia');
    }
};


// 29 Migración para denuncias_tipo
return new class extends Migration {
    public function up()
    {
        Schema::create('denuncias_tipo', function (Blueprint $table) {
            $table->id();
            $table->string('tipo', 40);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('denuncias_tipo');
    }
};

// 30 Migración para denuncias_tipologia
return new class extends Migration {
    public function up()
    {
        Schema::create('denuncias_tipologia', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 180);
            $table->char('procedencia', 1)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('denuncias_tipologia');
    }
};

// 31 Migración para denuncias_tipologiaslim
return new class extends Migration {
    public function up()
    {
        Schema::create('denuncias_tipologiaslim', function (Blueprint $table) {
            $table->id();
            $table->foreignId('denuncia_id')->constrained('denuncias_denuncia')->onDelete('cascade');
            $table->foreignId('tipologia_id')->constrained('denuncias_tipologia')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('denuncias_tipologiaslim');
    }
};

// 32 Migración para denuncias_violencia
return new class extends Migration {
    public function up()
    {
        Schema::create('denuncias_violencia', function (Blueprint $table) {
            $table->id();
            $table->string('tipo', 100);
            $table->char('clase', 2);
            $table->foreignId('denuncia_id')->constrained('denuncias_denuncia')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('denuncias_violencia');
    }
};


