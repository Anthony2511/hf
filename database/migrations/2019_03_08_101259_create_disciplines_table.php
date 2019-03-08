<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDisciplinesTable extends Migration {

	public function up()
	{
		Schema::create('disciplines', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('name', 255);
			$table->string('slug', 255);
			$table->string('gender', 255);
		});
	}

	public function down()
	{
		Schema::drop('disciplines');
	}
}