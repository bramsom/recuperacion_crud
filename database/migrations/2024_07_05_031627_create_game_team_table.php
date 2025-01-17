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
    { // tabla paritido equipo perteneciente al ejercicio 1
        Schema::create('game_team', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('game_id')->nullable(); // llave foranea de partido
            $table->unsignedBigInteger('team_id')->nullable(); // llave foranea de equipo

            $table->foreign('game_id')->references('id')->on('games')->onDelete('cascade');
            $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('game_team');
    }
};
