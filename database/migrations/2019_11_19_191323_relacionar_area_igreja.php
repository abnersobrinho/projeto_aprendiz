<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelacionarAreaIgreja extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('igrejas', function(Blueprint $table){
            $table->bigInteger('area_id')->unsigned();
            $table->foreign('area_id')->references('id')->on('areas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('igrejas', function(Blueprint $table){
            $table->dropForeign('igrejas_area_id_foreign');
            $table->dropColumn('area_id');
        });
    }
}
