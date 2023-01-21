<?php

use App\Models\Inmueble;
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
        Schema::create('inmuebles', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('slug');
            $table->string('precio');
            $table->string('descripcion');
            $table->enum('estado', [Inmueble::BORRADOR,Inmueble::REVISION,Inmueble::PUBLICADO])->default(Inmueble::BORRADOR);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // relacion con la tabla categoria para poder crear la restrincion primero crear la tabla categoria *_*
            // $table->unsignedBigInteger('categoria_id');
            // $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');
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
        Schema::dropIfExists('inmuebles');
    }
};
