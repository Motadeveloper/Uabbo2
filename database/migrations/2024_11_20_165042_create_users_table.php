<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique(); // nickname único
            $table->string('email')->unique();
            $table->string('password');
            $table->string('habbo_code')->nullable(); // Código para integração com Habbo
            $table->integer('level')->default(1); // Nível de permissão
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
