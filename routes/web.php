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

//PAGES
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
Route::get('confirmation-stage', 'ConfirmInternshipController@index')->name('confirmation-stage');

//FILTERS
Route::get('athletes/filter', 'AthleteController@filter')->name('athletes-filter');
Route::get('trainers/filter', 'TrainerController@filter')->name('trainers-filter');
Route::get('trainings/filter', 'TrainingController@filter')->name('trainings-filter');
Route::get('competitions/filter', 'CompetitionController@filter')->name('competitions-filter');


//POSTS
Route::get('athletes/{athlete}', 'AthleteController@show');
Route::get('entraineurs/{trainer}', 'TrainerController@show');
Route::get('stages/{internship}', 'InternshipController@show');
Route::get('competitions/{competition}', 'CompetitionController@show');
Route::get('articles/{article}', 'ArticleController@show')->name('article.single');
Route::post('comments/{article_id}', ['uses' => 'CommentController@store', 'as' => 'comment.store']);

//MAILS
Route::post('/send-contact-form', 'ContactController@contactForm')->name('mail-contact-form');
Route::post('/send-internship-form', 'InternshipController@internshipForm')->name('mail-internship-form');
Route::post('/send-join-form', 'JoinController@joinForm')->name('mail-join-form');



