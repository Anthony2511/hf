<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAthleteTrainingTable extends Migration {

	public function up()
	{
		Schema::create('athlete_training', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('athlete_id')->unsigned();
			$table->integer('training_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('athlete_training');
	}
}