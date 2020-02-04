<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo', 30);
            $table->string('descricao', 255);
            $table->string('imagem', 255)->nullable();
            $table->string('publico', 255)->nullable();
            $table->longText('informacoes')->nullable();
            $table->enum('publicar', ['s', 'n'])->default('n');
            $table->bigInteger('visualizacoes')->default(0);
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
        Schema::dropIfExists('cursos');
    }
}
