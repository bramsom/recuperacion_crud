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
    { // tabla de equipos perteneciente al ejercicio 1
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->integer('code_game'); //codigo del partido
            $table->integer('goals_away'); // goles fuera
            $table->date('date'); //fecha
            $table->integer('home_goals'); //goles casa
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
