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
    { // tabla de colaboradores perteneciente al ejercicio 2
        Schema::create('collaborators', function (Blueprint $table) {
            $table->id();
            $table->integer('nif'); //nif del colaborador
            $table->string('name'); //nombre del colaborador
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('collaborators');
    }
};
