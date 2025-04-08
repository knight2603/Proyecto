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
        Schema::create('productos_has_marcas', function (Blueprint $table) {
            $table->foreignId('producto_id')
                  ->constrained('productos') // hace referencia a productos.id
                  ->onDelete('cascade');
        
            $table->foreignId('marca_id')
                  ->constrained('marcas') // asegúrate que esta tabla exista y tenga id
                  ->onDelete('cascade');
        
            $table->timestamps();
        
            $table->primary(['producto_id', 'marca_id']); // clave primaria compuesta opcional
        });
        
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos_has_marcas');
    }
};
