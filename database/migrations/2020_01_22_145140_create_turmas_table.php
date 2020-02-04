<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTurmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turmas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo');
            $table->date('datain');
            $table->date('datafim');
            $table->string('dia');
            $table->time('horario');
            $table->string('local');
            $table->string('imagem')->nullable();
            $table->longText('informacoes')->nullable();
            $table->longText('mapa')->nullable();
            $table->enum('publicar', ['s', 'n'])->default('n');
            $table->bigInteger('visualizacoes')->default(0);
            $table->enum('tipo', ['presencial', 'online'])->default('presencial');

            $table->bigInteger('curso_id')->unsigned();
            $table->foreign('curso_id')->references('id')->on('cursos');

            $table->bigInteger('usuario_id')->unsigned();
            $table->foreign('usuario_id')->references('id')->on('usuarios');

            $table->string('usu_nome');
            $table->string('usu_email');
            $table->string('usu_celular');
            $table->string('usu_avatar')->nullable();

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
        Schema::dropIfExists('turmas');
    }
}
