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
        Schema::create('tb_libros', function (Blueprint $table) {
            $table->bigIncrements('idLibros');
            $table->string('titulo');
            $table->char('ISBN');
            $table->integer('paginas');
            $table->unsignedBigInteger('autor_id');
            $table->string('editorial');
            $table->string('email');
            $table->timestamps();
            $table->foreign('autor_id')->references('idAutores')->on('tb_autores')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_libros');
    }
};
