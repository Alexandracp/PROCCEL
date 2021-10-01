<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfesoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesores', function (Blueprint $table) {
            $table->id('id_prof');
            $table->string('p_nombre_p',20);
            $table->string('s_nombre_p',20)->nullable();
            $table->string('p_apellido_p',20);
            $table->string('s_apellido_p',20)->nullable();
            $table->string('foto_p',300)->nullable();
            $table->date('f_nacimiento_p');
            $table->string('cedula_p',10);
            $table->string('n_telf_p',10);
            $table->boolean('status_p',300)->default('1');
            $table->string('email_p',40);
            $table->string('direccion_u',50);
            
            $table->unsignedBigInteger('id_rol');
    
            $table->foreign('id_rol')
                  ->references('id_rol')
                  ->on('roles');
    
            $table->unsignedBigInteger('id_ciudad');
    
            $table->foreign('id_ciudad')
                  ->references('id_ciudad')
                  ->on('ciudades');
                  
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
        Schema::dropIfExists('profesores');
    }
}
