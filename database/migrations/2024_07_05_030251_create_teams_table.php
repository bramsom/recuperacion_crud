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
    {//tabla equipo perteneciente al ejercicio 1
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->integer('code_team'); //codigo del aquipo
            $table->string('stadium'); // estadio del equipo
            $table->string('city'); // ciudad
            $table->string('name'); // nombre del equipo
            $table->integer('aforo'); // aforo o numero de integrantes del equipo
            $table->date('year'); //año
            $table->unsignedBigInteger('player_id')->nullable(); // llave foranea del jugador
            $table->unsignedBigInteger('president_id')->nullable(); // llave foranea del presidente
            $table->foreign('player_id')->references('id')
            ->on('players')->onDelete('cascade');
            $table->foreign('president_id')->references('id')
            ->on('presidents')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
