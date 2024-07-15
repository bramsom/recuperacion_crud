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
    {     //tabla de origen perteneciente al ejercicio 3
        Schema::create('origins', function (Blueprint $table) {
            $table->id();
            $table->string('code_origin'); //codigo de origen
            $table->string('name_origin'); //nombre de origen
            $table->string('other_dates_o'); //otros datos sobre el origen 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('origins');
    }
};
