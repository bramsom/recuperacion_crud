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
    {  // tabla de proyectos perteneciente al ejercicio 2
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->integer('code'); // codigo del proyecto
            $table->date('start_date'); // fecha de inicio
            $table->date('finish_date'); // fecha de finalizacion
            $table->string('description'); // descripcion del proyecto
            $table->integer('amount'); // cuantia

            $table->unsignedBigInteger('customer_id')->nullable(); // llave foranea de cliente

            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
