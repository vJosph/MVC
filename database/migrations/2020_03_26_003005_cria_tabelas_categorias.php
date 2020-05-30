<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriaTabelasCategorias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Categorias', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->bigInteger('plataforma_id')->unsigned();
            $table->foreign('plataforma_id')->references('id')->on('plataformas')->onDelete('cascade');
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
        Schema::dropIfExists('Categorias');
    }
}
