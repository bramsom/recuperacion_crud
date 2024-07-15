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
    {  // tabla de pagos perteneciente al ejercicio 2
        Schema::create('pays', function (Blueprint $table) {
            $table->id();
            $table->integer('number'); //numero del pago
            $table->integer('amount'); // cantidad del pago
            $table->string('concept'); // concepto de pago
            $table->date('pay_date'); // fecha de pago
            
            $table->unsignedBigInteger('collaborator_id')->nullable();//llave foranea de colaborador
            $table->unsignedBigInteger('payment_type_id')->nullable(); // llave foranea de typo de pago

            $table->foreign('collaborator_id')->references('id')->on('collaborators')->onDelete('cascade');
            $table->foreign('payment_type_id')->references('id')->on('payment_types')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pays');
    }
};
