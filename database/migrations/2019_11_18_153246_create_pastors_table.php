<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePastorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pastors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 50);
            $table->string('endereco', 50)->nullable();

            $table->bigInteger('cidade_id')->unsigned()->nullable();
            $table->foreign('cidade_id')->references('id')->on('cidades');

            $table->bigInteger('igreja_id')->unsigned()->nullable();
            $table->foreign('igreja_id')->references('id')->on('igrejas');

            $table->string('email', 150)->nullable();
            $table->string('telfixo', 14)->nullable();
            $table->string('celular', 15)->nullable();
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
        Schema::dropIfExists('pastors');
    }
}
