<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRecordsTable extends Migration {

	public function up()
	{
		Schema::create('records', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('discipline', 255);
			$table->string('place', 255);
			$table->date('date');
			$table->string('record', 255);
		});
	}

	public function down()
	{
		Schema::drop('records');
	}
}