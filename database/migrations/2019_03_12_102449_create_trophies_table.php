<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrophiesTable extends Migration {

	public function up()
	{
		Schema::create('trophies', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('year');
			$table->string('name', 255);
		});
	}

	public function down()
	{
		Schema::drop('trophies');
	}
}