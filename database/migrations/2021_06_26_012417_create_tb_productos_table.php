<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_tb_productos')->require();
            $table->text('imagen')->require();
            $table->integer('precio')->require();
            $table->date('fec_ingreso')->require();
            $table->bigInteger('dirigido_a_id')->require();
            $table->bigInteger('marca_id')->require();
            $table->bigInteger('tipo_alimento_id')->require();
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
        Schema::dropIfExists('tb_productos');
    }
}
