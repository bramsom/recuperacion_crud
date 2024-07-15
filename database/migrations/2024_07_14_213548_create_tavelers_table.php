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
    {  //tabla de viajeros perteneciente al ejercicio 3
        Schema::create('tavelers', function (Blueprint $table) {
            $table->id();
            $table->integer('DNI');
            $table->string('name');
            $table->string('direction');
            $table->integer('phone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tavelers');
    }
};
