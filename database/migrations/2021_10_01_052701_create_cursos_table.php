<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id('id_curso');
            $table->string('curso',50);
            $table->date('f_inicio',20);
            $table->string('dia_clase',8);
            $table->time('h_inicio',6);
            $table->time('h_final',6);
            $table->integer('cupos');
            $table->string('duracion');
            $table->decimal('costo_u',10,2);
            $table->text('descripcion');
            $table->boolean('status_c',40)->default('1');
            $table->string('foto_c',300)->nullable();

            $table->unsignedBigInteger('id_prof');

            $table->foreign('id_prof')
                  ->references('id_prof')
                  ->on('profesors');
            
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
}
