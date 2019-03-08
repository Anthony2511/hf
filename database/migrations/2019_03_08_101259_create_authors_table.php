<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAuthorsTable extends Migration {

	public function up()
	{
		Schema::create('authors', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('firstname', 255);
			$table->string('lastname', 255);
			$table->string('picture', 255)->nullable();
			$table->string('email', 255);
		});
	}

	public function down()
	{
		Schema::drop('authors');
	}
}