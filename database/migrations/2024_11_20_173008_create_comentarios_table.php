

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComentariosTable extends Migration
{
    public function up()
    {
        Schema::create('comentarios', function (Blueprint $table) {
            $table->id();
            $table->text('conteudo'); // Conteúdo do comentário
            $table->foreignId('sorteio_id')->constrained('sorteios')->onDelete('cascade'); // Relaciona ao sorteio
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Relaciona ao usuário
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('comentarios');
    }
}
