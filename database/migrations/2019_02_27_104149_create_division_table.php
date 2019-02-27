<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDivisionTable extends Migration {

	public function up()
	{
		Schema::create('division', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('name', 255);
			$table->string('slug', 255);
		});
	}

	public function down()
	{
		Schema::drop('division');
	}
}