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
    {    //tabla de destinos perteneciente al ejercio 3
        Schema::create('destinations', function (Blueprint $table) {
            $table->id();
            $table->string('code_destination'); //codigo de destino
            $table->string('name_destination'); //nombre del destino
            $table->string('other_dates');  //otros datos sobre el destino
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('destinations');
    }
};
