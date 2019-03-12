<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlacesTable extends Migration {

	public function up()
	{
		Schema::create('places', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('name', 255);
		});
	}

	public function down()
	{
		Schema::drop('places');
	}
}