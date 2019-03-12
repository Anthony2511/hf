<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrainerDisciplineTable extends Migration {

	public function up()
	{
		Schema::create('trainer_discipline', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('trainer_id')->unsigned();
			$table->integer('discipline_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('trainer_discipline');
	}
}