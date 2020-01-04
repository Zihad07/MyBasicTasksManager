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

/**
 * Display All Tasks
 */
Route::get('/', 'TasksController@index');

/**
 * Add a new Tasks
 */


Route::post('/tasks','TasksController@store' );

/**
 * Delete An Existing Task
 */

 
 Route::delete('/tasks/{task}', 'TasksController@destroy');
 
