<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('role_id')->unsigned()->default(1);
            $table->foreign('role_id')->references('id')->on('roles');

            $table->bigInteger('igreja_id')->unsigned();
            $table->foreign('igreja_id')->references('id')->on('igrejas');

            $table->bigInteger('cidade_id')->unsigned();
            $table->foreign('cidade_id')->references('id')->on('cidades');

            $table->string('nome');
            $table->string('cpf');
            $table->string('email');
            $table->string('senha');
            $table->string('endereco');
            $table->string('bairro');
            $table->string('tel_fixo');
            $table->string('celular');
            $table->string('responsavel');
            $table->date('dtnasc');
            $table->integer('idade');


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
        Schema::dropIfExists('usuarios');
    }
}
