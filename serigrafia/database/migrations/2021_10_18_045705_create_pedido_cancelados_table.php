<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidoCanceladosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido_cancelados', function (Blueprint $table) {
            $table->id();
            $table->foreignId('IDPedido');
            $table->string('NombreCliente');
            $table->date('FechaRealizacion');
            $table->date('FechaEntrega');
            $table->string('Motivo');
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
        Schema::dropIfExists('pedido_cancelados');
    }
}
