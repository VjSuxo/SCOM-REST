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
        Schema::create('insumo_platillo', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('platillo_id')->nullable();
            $table->unsignedBigInteger('insumo_id')->nullable();

            $table->foreign('platillo_id')->references('id')->on('platillos')->onDelete('set null');
            $table->foreign('insumo_id')->references('id')->on('insumos')->onDelete('set null');
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
        Schema::dropIfExists('insumoplatillo');
    }
};
