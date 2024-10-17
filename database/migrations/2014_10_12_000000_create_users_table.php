<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/*MIGRATIONS CreateUsersTable POR DEFECTO 
    por convension seguir el siguiente formato...
    PHP ARTISAN MAKE:MIGRATION create_nombre_table
*/

/*NOTA KARLA: 
    PHP ARTISAN MIGRATE = EJECUTA TODAS LAS MIGRACIONES (LOS METODOS UP) 

    //--------------------------
    PHP ARTISAN MIGRATE:ROLLBACK = SE ELIMINA LAS ULTIMAS TABLAS (VER (ultimo) NUMERO DE BATCH EN phpMyAdmin)

    PHP ARTISAN MIGRATE:FRESH = ELIMINA TODAS LAS TABLAS 
    Y ACONTINUACION SE VUELVE A LLAMAR AL METODO UP Y SE CREAN LAS TABLAS NUEVAMENTE.
    CUIDADO!!!!!! PORQUE SE ELIMINAN TODOS LOS DATOS DE LA TABLA YA EXISTENTES.
********
    --AGREGAR COLUMNA
    PHP ARTISAN MAKE:MIGRATION ADD_NOMBRECOLUMNA_TO_NOMBRETABLA_TABLE
    VER MINUTO 4:30 https://youtu.be/2pppMAtIlro
    LUEGO REALIZAR PHP ARTISAN MIGRATE


    Las migraciones (MIGRATIONS) son como el control de versiones de su base de datos, lo que le permite 
    a su equipo definir y compartir la definición del esquema de la base de datos de la aplicación. */



class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */


    /*NOTA KARLA:
        CLASS= SCHEMA
        METODO= CREATE
        CREATE ES PARTE DE LA CLASS SCHEMA
        'USERS' = ESTE STRING ES EL NOMBRE DE LA TABLA QUE SE VA A CREAR 
        OBJETO = $TABLE
        BLUEPRINT ES EL TIPO DE DATO DEL OBJETO 
        ESTE OBJETO NOS AYUDARÁ A CREAR LAS COLUMNAS DE LA TABLA USERS
        
        TIPO DE DATOS PARA LA TABLA
        ID(); INTEGER - UNSIGNED - INCREMENT
        STRING('NOMBRE'); PROPIEDAD VARCHAR = HASTA 255 CARACTERES 
        STRING('NOMBRES',50); PROPIEDAD VARCHAR = 50 CARACTERES (MENOS DE 255 CARACTERES)
        TEXT('NOMBRESSS); PROPIEDAD VARCHAR = MAS DE 255 CARACTERES 
        TIMESTAMP('email_verified_at'); PARA GUARDAS FECHAS DE VERIFICACION DE CORREO
        REMEMBERTOKEN(); VARCHAR TAMAÑO 100 
        TIMESTAMPS(); CREA 2 COLUMNAS (CREATED_AT UPDATE_AT)
        */

    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('foto')->nullable();
            $table->string('genero')->nullable();
            $table->string('contacto')->nullable();
            $table->string('direccion')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users'); /*dropIfExists() = ELIMINA UNA TABLA */
    }
}
