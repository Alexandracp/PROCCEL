<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id('id_usu');
            $table->string('p_nombre_u',20);
            $table->string('s_nombre_u',20)->nullable();
            $table->string('p_apellido_u',20);
            $table->string('s_apellido_u',20)->nullable();
            $table->string('foto_u',300)->nullable();
            $table->date('f_nacimiento_u');
            $table->string('cedula_u',10);
            $table->string('n_telf_u',10);
            $table->boolean('status_u',300)->default('1');
            $table->string('email_u',40);
            $table->string('usuario',20);
            $table->string('password',20);
            $table->string('direccion_u',50);

            $table->unsignedBigInteger('id_rol')->default('1');

            $table->foreign('id_rol')
                ->references('id_rol')
                ->on('rols');
            
            $table->unsignedBigInteger('id_ciudad');

            $table->foreign('id_ciudad')
                  ->references('id_ciudad')
                  ->on('ciudads');
                  
            $table->unsignedBigInteger('id_genero');

            $table->foreign('id_genero')
                  ->references('id_genero')
                  ->on('generos');

            $table->unsignedBigInteger('id_nacionalidad');

            $table->foreign('id_nacionalidad')
                  ->references('id_nacionalidad')
                  ->on('tipos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
