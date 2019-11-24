<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddVisualizacoesEventosTable extends Migration
{
    public function up()
    {
        Schema::table('eventos', function(Blueprint $table) {
            $table->integer('visualizacoes')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('eventos', function(Blueprint $table) {
            $table->dropColumn('visualizacoes');
        });
    }
}
