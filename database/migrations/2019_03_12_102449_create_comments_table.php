<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommentsTable extends Migration {

	public function up()
	{
		Schema::create('comments', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->text('content');
			$table->string('user_name', 255);
			$table->string('email', 255);
			$table->integer('post_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('comments');
	}
}