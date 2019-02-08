<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAthletesTable extends Migration {

	public function up()
	{
		Schema::create('athletes', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('firstname', 255);
			$table->string('lastname', 255);
            $table->string('image', 255)->nullable();
			$table->date('date_of_birth');
			$table->string('status', 255);
			$table->string('slug', 255);
		});
	}

	public function down()
	{
		Schema::drop('athletes');
	}
}