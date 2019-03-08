<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrainerDivisionTable extends Migration {

	public function up()
	{
		Schema::create('trainer_division', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('trainer_id')->unsigned();
			$table->integer('division_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('trainer_division');
	}
}