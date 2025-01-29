<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id(); // Autoincremental ID
            $table->string('title'); // Título de la película
            $table->string('year', 4); // Año (string de longitud 4)
            $table->string('director', 64); // Director (string de longitud 64)
            $table->string('poster'); // URL del póster
            $table->boolean('rented')->default(false); // Booleano con valor por defecto false
            $table->text('synopsis'); // Sinopsis
            $table->timestamps(); // Campos created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies'); // Eliminar la tabla movies
    }
}
