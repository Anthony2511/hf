<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEvolutionsTable extends Migration {

	public function up()
	{
		Schema::create('evolutions', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('year');
			$table->string('category', 255);
		});
	}

	public function down()
	{
		Schema::drop('evolutions');
	}
}