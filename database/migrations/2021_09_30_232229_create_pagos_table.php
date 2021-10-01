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
            $table->id('cod_pago');
            $table->string('referencia',10);
            $table->string('s_nombre_u',20)->nullable();
            $table->date('f_pago');
            $table->decimal('monto_c',10,2);
            $table->string('comprobante',300);
            
            $table->unsignedBigInteger('id_banco');

            $table->foreign('id_banco')
                  ->references('id_banco')
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
