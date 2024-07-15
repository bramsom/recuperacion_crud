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
    {// tabla de goles perteneciente al ejercicio 1
        Schema::create('gols', function (Blueprint $table) {
            $table->id();
            $table->integer('code'); //codigo del gol
            $table->integer('minute'); //minuto del gol
            $table->string('desc'); //descripcion del gol
            $table->unsignedBigInteger('player_id')->nullable();// llave foranea de jugador
            $table->unsignedBigInteger('game_id')->nullable();  // llave foranea de quipo
            $table->foreign('player_id')->references('id')->
            on('players')->onDelete('cascade');
            $table->foreign('game_id')->references('id')->
            on('games')->onDelete('cascade'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gols');
    }
};
