<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


//////////////////////////////////////////////////////
// navi says that:-
// NOTE: specify routes in following sequence
// It fixed some on issues
// esp.
// Class Project not found by controller.php
//////////////////////////////////////////////////////

Route::get('/', 'ProjectsController@index'); 

// Provide controller methods with object instead of ID
Route::model('tasks', 'Task');
Route::model('projects', 'Project'); 

// Setting Slug-based URLs
Route::bind('tasks', function($value, $route) {
	return App\Task::whereSlug($value)->first();
});
Route::bind('projects', function($value, $route) {
	return App\Project::whereSlug($value)->first();
});

Route::resource('projects',       'ProjectsController');
Route::resource('projects.tasks', 'TasksController');


