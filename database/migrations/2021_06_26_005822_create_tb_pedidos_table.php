<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pedidos', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_pedido')->require();
            $table->string('estado_de_pedido')->require();
            $table->integer('cantidad_de_productos')->require();
            $table->bigInteger('usuario_comprador_id')->require();
            $table->bigInteger('medios_de_pago_id')->require();
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
        Schema::dropIfExists('tb_pedidos');
    }
}
