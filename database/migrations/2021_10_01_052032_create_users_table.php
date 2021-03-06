<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) { //Usuario
            $table->id();
            $table->string('p_nombre_u',20);
            $table->string('s_nombre_u',20)->nullable();
            $table->string('p_apellido_u',20);
            $table->string('s_apellido_u',20)->nullable();
            $table->string('foto_u',300)->nullable();
            $table->date('f_nacimiento_u');
            $table->string('cedula_u',10) ->unique();
            $table->string('n_telf_u',12);
            $table->boolean('status_u',300)->default('1');
            $table->string('email_u',40);
            $table->string('password',400);

            $table->unsignedBigInteger('id_rol')->default('1');

            $table->foreign('id_rol')
                ->references('id_rol')
                ->on('rols');
                  
            $table->unsignedBigInteger('id_genero');

            $table->foreign('id_genero')
                  ->references('id_genero')
                  ->on('generos');

            $table->unsignedBigInteger('idnaci');

            $table->foreign('idnaci')
                  ->references('idnaci')
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
        Schema::dropIfExists('users');
    }
}
