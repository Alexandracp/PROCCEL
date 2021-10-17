<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscripcionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripcions', function (Blueprint $table) {
            $table->id('id_inscripcion');
            $table->date('f_inscripcion');
            $table->string('status_inscrip');

            /**Claves Foraneas */

            $table->unsignedBigInteger('id_certif');

            $table->foreign('id_certif')
                  ->references('id')
                  ->on('certificados');

            $table->unsignedBigInteger('id_usu');

                $table->foreign('id_usu')
                    ->references('id')
                    ->on('users'); //usuarios

            $table->unsignedBigInteger('cod_pago');

            $table->foreign('cod_pago')
                  ->references('cod_pago')
                  ->on('pagos');

            $table->unsignedBigInteger('id_curso');

            $table->foreign('id_curso')
                  ->references('id_curso')
                  ->on('cursos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inscripcions');
    }
}
