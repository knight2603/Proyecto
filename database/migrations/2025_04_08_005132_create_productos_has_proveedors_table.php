<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('productos_has_proveedors', function (Blueprint $table) {
            $table->unsignedBigInteger('producto_id');
            $table->unsignedBigInteger('proveedor_id');

            $table->primary(['producto_id', 'proveedor_id']);

            $table->foreign('producto_id')
                ->references('id')
                ->on('productos')
                ->onDelete('cascade');

            $table->foreign('proveedor_id')
                ->references('id')
                ->on('proveedors')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('productos_has_proveedors');
    }
};
