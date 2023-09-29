<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cadastro_jogos', function (Blueprint $table) {
            $table->id();
            $table->int('id_user'); //fazer o relacionamento 
            $table->string('nome_jogo');
            $table->longText('descrição');
            $table->string('URL_jogo');
            $table->string('URL_video');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cadastro_jogos');
    }
};
