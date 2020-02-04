<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddInstrumentoUsuarioTable extends Migration
{
    public function up()
    {
        Schema::table('usuarios', function(Blueprint $table) {
            $table->bigInteger('instrumento_id')->unsigned()->nullable();
            $table->foreign('instrumento_id')->references('id')->on('instrumentos')->nullable();        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('usuarios', function(Blueprint $table) {
            $table->dropColumn('instrumento_id');
        });
    }}
