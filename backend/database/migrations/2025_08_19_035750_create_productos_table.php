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
    {
 Schema::create('producto', function (Blueprint $table) {
            $table->id('id_producto');
            $table->string('nombre', 100);
            $table->text('descripcion')->nullable();
            $table->decimal('precio', 10, 2);
            $table->string('imagen', 255)->nullable();
            $table->unsignedBigInteger('categoria_id');
            $table->boolean('estado')->default(1);

            $table->foreign('categoria_id')
                  ->references('id_categoria')
                  ->on('categoria')
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};