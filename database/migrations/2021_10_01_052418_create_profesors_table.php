<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfesorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesors', function (Blueprint $table) {
            $table->id('id_prof');
            $table->string('pnomb_p',20);
            $table->string('snomb_p',20)->nullable();
            $table->string('pape_p',20);
            $table->string('sape_p',20)->nullable();
            $table->string('foto_p',300)->nullable();
            $table->date('fnac_p');
            $table->string('cedu_p',10)->unique();
            $table->string('ntel_p',12);
            $table->boolean('esta_p',300)->default('1');
            $table->string('emai_p',40);
                  
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
        Schema::dropIfExists('profesors');
    }
}
