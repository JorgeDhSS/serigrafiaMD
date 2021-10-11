<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoPedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto__pedidos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('IDPedido');
            $table->float("PrecioTotal");
            $table->integer("NumProductos");
            $table->foreignId('IDproducto');
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
        Schema::dropIfExists('producto__pedidos');
    }
}
