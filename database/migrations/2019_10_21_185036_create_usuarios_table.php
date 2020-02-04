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

            $table->enum('termos', ['s', 'n'])->default('s');
            $table->string('nomecompleto');
            $table->string('nome');
            $table->string('email');
            $table->string('avatar')->nullable();
            $table->string('senha');
            $table->string('celular');
            $table->string('cpf')->nullable();
            $table->string('endereco')->nullable();
            $table->enum('sexo', ['m', 'f'])->default('m');

            $table->bigInteger('cidade_id')->unsigned();
            $table->foreign('cidade_id')->references('id')->on('cidades');

            $table->string('bairro')->nullable();
            $table->string('tel_fixo')->nullable();

            $table->bigInteger('igreja_id')->unsigned();
            $table->foreign('igreja_id')->references('id')->on('igrejas');

            $table->date('dtnasc')->nullable();
            $table->string('responsavel')->nullable();

            $table->longText('sobre')->nullable();
            $table->integer('idade')->nullable();
            $table->enum('ativo', ['s', 'n'])->default('n');
            $table->enum('toca', ['s', 'n'])->default('n');

            $table->bigInteger('role_id')->unsigned()->default(1);
            $table->foreign('role_id')->references('id')->on('roles');

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
