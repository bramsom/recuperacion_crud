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
    {  //tabla cliente perteneciente al ejercicio 2
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('code'); //codigo del cliente
            $table->integer('phone'); // numero del telefono
            $table->string('num_social'); // numero social
            $table->string('home'); //domicilio del cliente
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
