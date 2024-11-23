<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSorteioPremiosTable extends Migration
{
    public function up()
    {
        Schema::create('sorteio_premios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sorteio_id')->constrained('sorteios')->onDelete('cascade');
            $table->integer('posicao'); // Ex.: 1º lugar, 2º lugar
            $table->string('premio_tipo'); // Ex.: item, moeda
            $table->integer('premio_quantidade'); // Quantidade de prêmios
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sorteio_premios');
    }
}
