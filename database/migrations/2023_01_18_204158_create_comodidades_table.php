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
        Schema::create('comodidades', function (Blueprint $table) {
            $table->id();
            $table->string('municipio');
            $table->string('barrio');
            $table->string('tipo_inmueble');
            $table->string('destinacion');
            $table->integer('habitaciones');
            $table->integer('banos');
            $table->integer('closets');
            $table->integer('estrato');
            $table->unsignedBigInteger('inmueble_id');
            $table->foreign('inmueble_id')->references('id')->on('inmuebles')->onDelete('cascade');
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
        Schema::dropIfExists('comodidades');
    }
};
