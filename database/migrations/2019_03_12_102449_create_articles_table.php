<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArticlesTable extends Migration {

	public function up()
	{
		Schema::create('articles', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('title', 255);
			$table->string('slug', 255);
			$table->text('introduction')->nullable();
			$table->text('content');
			$table->string('image', 255)->nullable();
			$table->integer('author_id')->unsigned();
			$table->date('date');
		});
	}

	public function down()
	{
		Schema::drop('articles');
	}
}