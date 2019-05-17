<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'HomeController@index')->name('home');
Route::get('athletes', 'AthleteController@index')->name('athletes');
Route::get('entraineurs', 'TrainerController@index')->name('entraineurs');
Route::get('stages', 'InternshipController@index')->name('stages');
Route::get('entrainements', 'TrainingController@index')->name('entrainements');
Route::get('competitions', 'CompetitionController@index')->name('competitions');
Route::get('a-propos', 'AboutController@index')->name('a-propos');
Route::get('articles', 'ArticleController@index')->name('articles');
Route::get('equipements', 'AmenitieController@index')->name('equipements');
Route::get('contact', 'ContactController@index')->name('contact');
Route::get('rejoindre', 'JoinController@index')->name('rejoindre');
Route::get('athletes/filter', 'AthleteController@filter')->name('athletes-filter');


//POSTS
Route::get('athletes/{athlete}', 'AthleteController@show');
Route::get('entraineurs/{trainer}', 'TrainerController@show');
Route::get('stages/{internship}', 'InternshipController@show');
Route::get('competitions/{competition}', 'CompetitionController@show');
Route::get('articles/{article}', 'ArticleController@show')->name('article.single');
Route::post('comments/{article_id}', ['uses' => 'CommentController@store', 'as' => 'comment.store']);



