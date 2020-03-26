<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriaTabelasJogosVenda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('JogosVenda', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('venda_id')->unsigned();
            $table->bigInteger('jogos_id')->unsigned();
            $table->foreign('venda_id')->references('id')->on('Vendas')->onDelete('cascade');
            $table->foreign('jogos_id')->references('id')->on('Jogos')->onDelete('cascade');
            $table->double('valor', 10, 2);
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
        Schema::dropIfExists('JogosVenda');
    }
}
