<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->require();
            $table->integer('numero_de_documento')->require();
            $table->string('correo')->unique();
            $table->string('clave')->require();
            $table->integer('telefono')->require();
            $table->string('direccion')->require();
            $table->bigInteger('pedido_id')->require();
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
        Schema::dropIfExists('tb_clientes');
    }
}
