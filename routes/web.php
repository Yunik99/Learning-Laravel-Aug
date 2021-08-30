<?php

use Illuminate\Support\Facades\Route;
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


Route::view('/','homepage');
Route::view('/home','homepage');

Route::get('/tasks', 'App\Http\Controllers\TasksController@index');
Route::get('/task/create', 'App\Http\Controllers\TasksController@create');
Route::get('/task/{task}', 'App\Http\Controllers\TasksController@show');

Route::post('/tasks', 'App\Http\Controllers\TasksController@store');
