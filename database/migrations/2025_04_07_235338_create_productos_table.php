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
        Schema::create('productos', function (Blueprint $table) {
            $table->id(); // Crea "id" como clave primaria (BIGINT UNSIGNED AUTO_INCREMENT)
        
            // Clave foránea hacia administradors.id
            $table->foreignId('administrador_id')
                  ->constrained('administradors') // nombre exacto de la tabla
                  ->onDelete('cascade');
        
            $table->string('productos_nombre', 45)->nullable();
            $table->string('productos_entrada', 45)->nullable();
            $table->string('productos_salida', 45)->nullable();
            $table->string('stock_productos', 45)->nullable();
            $table->integer('valor_producto')->nullable();
            $table->integer('cantidad_max_producto')->nullable();
            $table->integer('cantidad_min_producto')->nullable();
        
            $table->timestamps();
        });
        
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
};
