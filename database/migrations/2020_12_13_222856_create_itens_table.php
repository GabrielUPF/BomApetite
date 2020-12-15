<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('pedido_id')->unsigned()->nullable();
            $table->foreign('pedido_id')->references('id')->on('pedidos');
            $table->bigInteger('produto_id')->unsigned()->nullable();
            $table->foreign('produto_id')->references('id')->on('produtos');
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
        Schema::dropIfExists('itens');
    }
}
