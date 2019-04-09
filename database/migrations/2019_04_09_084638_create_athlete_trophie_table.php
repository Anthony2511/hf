<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAthleteTrophieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('athlete_trophie', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('athlete_id')->unsigned();
            $table->integer('trophie_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('athlete_trophie');
    }
}
