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
        Schema::create('productos_has_orden_ventas', function (Blueprint $table) {
            $table->foreignId('productos_id')->constrained('productos')->onDelete('cascade');
            $table->foreignId('orden_ventas_id')->constrained('orden_ventas')->onDelete('cascade');
        
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
        Schema::dropIfExists('productos_has_orden_ventas');
    }
};
