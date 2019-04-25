<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompetitionsTable extends Migration {

	public function up()
	{
		Schema::create('competitions', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('title', 255);
			$table->string('place', 255);
			$table->text('content')->nullable();
			$table->date('startDate');
			$table->boolean('isFinish');
            $table->string('image', 255);
            $table->string('type', 255);
            $table->string('slug', 255);
		});
	}

	public function down()
	{
		Schema::drop('competitions');
	}
}