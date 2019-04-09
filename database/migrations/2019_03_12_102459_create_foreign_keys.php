<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('athlete_trophie', function(Blueprint $table) {
        $table->foreign('trophie_id')->references('id')->on('trophies')
            ->onDelete('cascade')
            ->onUpdate('cascade');
    });
    Schema::table('athlete_trophie', function(Blueprint $table) {
        $table->foreign('athlete_id')->references('id')->on('athlete')
            ->onDelete('cascade')
            ->onUpdate('cascade');
    });
		Schema::table('athletes', function(Blueprint $table) {
			$table->foreign('division_id')->references('id')->on('divisions')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('trainings', function(Blueprint $table) {
			$table->foreign('trainer_id')->references('id')->on('trainers')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('athlete_trainer', function(Blueprint $table) {
			$table->foreign('athlete_id')->references('id')->on('athletes')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('athlete_trainer', function(Blueprint $table) {
			$table->foreign('trainer_id')->references('id')->on('trainers')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('trainer_discipline', function(Blueprint $table) {
			$table->foreign('trainer_id')->references('id')->on('trainers')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('trainer_discipline', function(Blueprint $table) {
			$table->foreign('discipline_id')->references('id')->on('disciplines')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('trainer_division', function(Blueprint $table) {
			$table->foreign('trainer_id')->references('id')->on('trainers')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('trainer_division', function(Blueprint $table) {
			$table->foreign('division_id')->references('id')->on('divisions')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('trainings', function(Blueprint $table) {
			$table->foreign('place_id')->references('id')->on('places')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('trainings', function(Blueprint $table) {
			$table->foreign('type_id')->references('id')->on('types')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('athlete_training', function(Blueprint $table) {
			$table->foreign('athlete_id')->references('id')->on('athletes')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('athlete_training', function(Blueprint $table) {
			$table->foreign('training_id')->references('id')->on('trainings')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('articles', function(Blueprint $table) {
			$table->foreign('author_id')->references('id')->on('authors')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('articles', function(Blueprint $table) {
			$table->foreign('category_id')->references('id')->on('categories')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('comments', function(Blueprint $table) {
			$table->foreign('post_id')->references('id')->on('articles')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('athlete_discipline', function(Blueprint $table) {
			$table->foreign('athlete_id')->references('id')->on('athletes')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('athlete_discipline', function(Blueprint $table) {
			$table->foreign('discipline_id')->references('id')->on('disciplines')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('athlete_trophie', function(Blueprint $table) {
			$table->dropForeign('athlete_trophie_trophie_id_foreign');
		});
        Schema::table('athlete_trophie', function(Blueprint $table) {
            $table->dropForeign('athlete_trophie_athlete_id_foreign');
        });
		Schema::table('athletes', function(Blueprint $table) {
			$table->dropForeign('athletes_division_id_foreign');
		});
		Schema::table('trainings', function(Blueprint $table) {
			$table->dropForeign('trainings_trainer_id_foreign');
		});
		Schema::table('athlete_trainer', function(Blueprint $table) {
			$table->dropForeign('athlete_trainer_athlete_id_foreign');
		});
		Schema::table('athlete_trainer', function(Blueprint $table) {
			$table->dropForeign('athlete_trainer_trainer_id_foreign');
		});
		Schema::table('trainer_discipline', function(Blueprint $table) {
			$table->dropForeign('trainer_discipline_trainer_id_foreign');
		});
		Schema::table('trainer_discipline', function(Blueprint $table) {
			$table->dropForeign('trainer_discipline_discipline_id_foreign');
		});
		Schema::table('trainer_division', function(Blueprint $table) {
			$table->dropForeign('trainer_division_trainer_id_foreign');
		});
		Schema::table('trainer_division', function(Blueprint $table) {
			$table->dropForeign('trainer_division_division_id_foreign');
		});
		Schema::table('trainings', function(Blueprint $table) {
			$table->dropForeign('trainings_place_id_foreign');
		});
		Schema::table('trainings', function(Blueprint $table) {
			$table->dropForeign('trainings_type_id_foreign');
		});
		Schema::table('athlete_training', function(Blueprint $table) {
			$table->dropForeign('athlete_training_athlete_id_foreign');
		});
		Schema::table('athlete_training', function(Blueprint $table) {
			$table->dropForeign('athlete_training_training_id_foreign');
		});
		Schema::table('articles', function(Blueprint $table) {
			$table->dropForeign('articles_author_id_foreign');
		});
		Schema::table('articles', function(Blueprint $table) {
			$table->dropForeign('articles_category_id_foreign');
		});
		Schema::table('comments', function(Blueprint $table) {
			$table->dropForeign('comments_post_id_foreign');
		});
		Schema::table('athlete_discipline', function(Blueprint $table) {
			$table->dropForeign('athlete_discipline_athlete_id_foreign');
		});
		Schema::table('athlete_discipline', function(Blueprint $table) {
			$table->dropForeign('athlete_discipline_discipline_id_foreign');
		});
	}
}