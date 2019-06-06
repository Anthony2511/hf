<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.


//ROLE ADMIN
Route::group([
    'prefix' => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', config('backpack.base.middleware_key', 'admin'), 'role:administrateur'],
    'namespace' => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    CRUD::resource('athlete', 'AthleteCrudController');
    CRUD::resource('trainer','TrainerCrudController');
    CRUD::resource('discipline','DisciplineCrudController');
    CRUD::resource('division','DivisionCrudController');
    CRUD::resource('place','PlaceCrudController');
    CRUD::resource('type','TypeCrudController');
    CRUD::resource('training','TrainingCrudController');
    CRUD::resource('trophie','TrophieCrudController');
    CRUD::resource('internship','InternshipCrudController');
    CRUD::resource('competition','CompetitionCrudController');
    CRUD::resource('article','ArticleCrudController');
    CRUD::resource('author','AuthorCrudController');
    CRUD::resource('amenitie','AmenitieCrudController');
    CRUD::resource('size','SizeCrudController');
    CRUD::resource('comment','CommentCrudController');
}); // this should be the absolute last line of this file


//ROLE TRAINER
Route::group([
    'prefix' => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', config('backpack.base.middleware_key', 'admin'), 'role:entraineur'],
    'namespace' => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    CRUD::resource('athlete', 'AthleteCrudController');
    CRUD::resource('trainer','TrainerCrudController');
    CRUD::resource('discipline','DisciplineCrudController');
    CRUD::resource('division','DivisionCrudController');
    CRUD::resource('place','PlaceCrudController');
    CRUD::resource('type','TypeCrudController');
    CRUD::resource('training','TrainingCrudController');
    CRUD::resource('trophie','TrophieCrudController');
    CRUD::resource('internship','InternshipCrudController');
}); // this should be the absolute last line of this file

//ROLE ATHLETE
Route::group([
    'prefix' => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', config('backpack.base.middleware_key', 'admin'), 'role:athlète'],
    'namespace' => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    CRUD::resource('athlete', 'AthleteCrudController');
    CRUD::resource('trophie','TrophieCrudController');
}); // this should be the absolute last line of this file