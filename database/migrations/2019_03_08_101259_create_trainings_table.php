<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrainingsTable extends Migration {

	public function up()
	{
		Schema::create('trainings', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('place_id')->unsigned();
			$table->integer('type_id')->unsigned();
			$table->string('day', 255);
			$table->time('startHour');
			$table->time('endHour');
			$table->text('content')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('trainings');
	}
}