<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAmenitiesTable extends Migration {

	public function up()
	{
		Schema::create('amenities', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('image', 255);
			$table->string('price', 255);
			$table->string('size', 255);
            $table->string('title', 255);
		});
	}

	public function down()
	{
		Schema::drop('amenities');
	}
}