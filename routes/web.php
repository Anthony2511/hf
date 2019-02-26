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
Route::get('trainers', 'TrainerController@index')->name('trainers');

//POST
Route::get('athletes/{athlete}', 'AthleteController@show');

