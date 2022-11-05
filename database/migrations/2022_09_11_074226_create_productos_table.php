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
            $table->id();
            $table->string('nombre', 20);
            $table->string('descripcion', 150);
            $table->string('costo',50);
            $table->string('estado',20);
            $table->string('stock',20);
            $table->binary('imgproducto');

            $table->unsignedBigInteger('categoria_id')->nullable();

            $table->unsignedBigInteger('chef_id')->nullable();
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('set null');
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
        Schema::dropIfExists('productos');
    }
};
