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
            $table->id('idinsc');
            $table->date('f_insc');
            $table->string('e_insc');

            /**Claves Foraneas */

            $table->unsignedBigInteger('id_certif');

            $table->foreign('id_certif')
                  ->references('id')
                  ->on('certificados');

            $table->unsignedBigInteger('id_usu');

                $table->foreign('id_usu')
                    ->references('id')
                    ->on('users'); //usuarios

            $table->unsignedBigInteger('idpago');

            $table->foreign('idpago')
                  ->references('idpago')
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
