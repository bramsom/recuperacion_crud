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
    { // tabla de presidentes perteneciente al ejercicio 1
        Schema::create('presidents', function (Blueprint $table) {
            $table->id();
            $table->string('DNI'); // identificacion del presidente
            $table->string('name'); // nombre del presidente
            $table->string('last_name'); //apellido del presidente
            $table->date('birth_date'); //fecha de nacimiento
            $table->integer('year'); //año
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presidents');
    }
};
