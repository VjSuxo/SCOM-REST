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
        Schema::create('comanda_producto', function (Blueprint $table) {
            $table->id();
            $table->integer('cant_pedido');

            $table->unsignedBigInteger('comanda_id')->nullable();
            $table->unsignedBigInteger('producto_id')->nullable();

            $table->foreign('comanda_id')->references('id')->on('comandas')->onDelete('set null');
            $table->foreign('producto_id')->references('id')->on('productos')->onDelete('set null');
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
        Schema::dropIfExists('comandaproducto');
    }
};
