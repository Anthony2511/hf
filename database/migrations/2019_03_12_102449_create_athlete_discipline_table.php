<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAthleteDisciplineTable extends Migration {

	public function up()
	{
		Schema::create('athlete_discipline', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('athlete_id')->unsigned();
			$table->integer('discipline_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('athlete_discipline');
	}
}