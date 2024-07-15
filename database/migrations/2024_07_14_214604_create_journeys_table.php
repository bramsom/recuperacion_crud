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
    {    //tabla de viajes perteneciente al ejercicio 3
        Schema::create('journeys', function (Blueprint $table) {
            $table->id();
            $table->string('code');//codigo del viaje
            $table->integer('num_places');//numero de plazas
            $table->date('travel_date');// fecha de viaje
            $table->string('other_dates_v');//otros datos sore el viaje

            $table->unsignedBigInteger('taveler_id')->nullable();// indicador del viajero en la tabla viajes
            $table->unsignedBigInteger('destination_id')->nullable();//indicador del destino en la tabla viajes
            $table->unsignedBigInteger('origin_id')->nullable(); //indicador de origen en la tabla viajes

            $table->foreign('taveler_id')->references('id')->on('tavelers')->onDelete('cascade');
            $table->foreign('destination_id')->references('id')->on('destinations')->onDelete('cascade');
            $table->foreign('origin_id')->references('id')->on('origins')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('journeys');
    }
};
