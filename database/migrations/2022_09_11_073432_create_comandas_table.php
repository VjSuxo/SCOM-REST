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
        Schema::create('comandas', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->time('hora');

            $table->unsignedBigInteger('factura_id')->nullable();
            $table->unsignedBigInteger('mesa_id')->nullable();

            $table->unsignedBigInteger('chef_id')->nullable();
            $table->foreign('factura_id')->references('id')->on('facturas')->onDelete('set null');
            $table->foreign('mesa_id')->references('id')->on('mesas')->onDelete('set null');
            $table->foreign('chef_id')->references('id')->on('chefs')->onDelete('set null');


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
        Schema::dropIfExists('comandas');
    }
};
