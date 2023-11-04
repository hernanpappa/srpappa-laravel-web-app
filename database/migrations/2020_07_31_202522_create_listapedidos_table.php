<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListapedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listapedidos', function (Blueprint $table) {
            $table->id();
            $table->unsignedSmallInteger('cantidad');
            $table->timestamps();
        });

        Schema::table('listapedidos', function (Blueprint $table) {
            $table->unsignedBigInteger('idpedido');
            $table->unsignedBigInteger('idproducto');
            $table->foreign('idpedido')->references('id')->on('pedidos');
            $table->foreign('idproducto')->references('id')->on('productos');
        });
    }

    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listapedidos');
    }
}
