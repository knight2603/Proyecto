<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden_ventas_has_metodo_pago', function (Blueprint $table) {
            $table->foreignId('orden_ventas_id')
                  ->constrained('orden_ventas')
                  ->onDelete('cascade');
        
            $table->foreignId('metodo_pago_id')
                  ->constrained('metodo_pago') // Asegúrate que esta tabla exista y tenga `$table->id();`
                  ->onDelete('cascade');
        
            $table->timestamps();
        
            $table->primary(['orden_ventas_id', 'metodo_pago_id']); // Clave primaria compuesta opcional
        });
        
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orden_ventas_has_metodo_pagos');
    }
};
