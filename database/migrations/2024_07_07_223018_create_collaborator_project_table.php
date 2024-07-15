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
    {  // tabla de muchos a muchos entre colaborador y proyecto perteneciente al ejercicio 2
        Schema::create('collaborator_project', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('collaborator_id')->nullable(); // llave foranea de colaborador
            $table->unsignedBigInteger('project_id')->nullable(); // llave foranea de proyecto
            
            $table->foreign('collaborator_id')->references('id')->on('collaborators')->onDelete('cascade');
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('collaborator_project');
    }
};
