<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class IgrejaPastor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('igreja_pastor', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->bigInteger('igreja_id')->unsigned();
            $table->foreign('igreja_id')->references('id')->on('igrejas');

            $table->bigInteger('pastor_id')->unsigned();
            $table->foreign('pastor_id')->references('id')->on('usuarios');

            $table->date('de')->nullable();
            $table->date('ate')->nullable();
            
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
        Schema::dropIfExists('igreja_pastor');
    }
}
