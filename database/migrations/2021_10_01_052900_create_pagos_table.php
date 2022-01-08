<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->id('idpago');
            $table->string('nref_p',10);
            $table->date('fech_p');
            $table->decimal('mont_p',10,2);
            $table->string('comprobante',300);
            
            $table->unsignedBigInteger('idbanc');

            $table->foreign('idbanc')
                  ->references('idbanc')
                  ->on('bancos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pagos');
    }
}
