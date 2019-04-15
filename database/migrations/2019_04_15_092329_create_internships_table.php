<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInternshipsTable extends Migration {

	public function up()
	{
		Schema::create('internships', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('title', 255);
			$table->datetime('startDay');
			$table->datetime('endDay');
			$table->time('startHour');
			$table->time('endHour');
			$table->text('content');
		});
	}

	public function down()
	{
		Schema::drop('internships');
	}
}