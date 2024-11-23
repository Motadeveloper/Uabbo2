<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSorteiosTable extends Migration
{
    public function up()
    {
        Schema::create('sorteios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Relaciona ao criador do sorteio
            $table->string('title');
            $table->text('description');
            $table->json('premio_detalhes')->nullable(); // Detalhes dos prêmios no formato JSON
            $table->timestamp('data_sorteio')->nullable(); // Data e hora do sorteio
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sorteios');
    }
}
