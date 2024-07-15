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
    { //tabla jugadores perteneciente al ejercicio 1
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->integer('code'); //coigo de jugador
            $table->date('birthdate'); //fecha de nacimiento
            $table->string('name'); //nombre del jugador
            $table->string('position'); //posicion del jugador
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
