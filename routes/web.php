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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user', 'UserController@index');
Route::get('/user/{id}/edit', 'UserController@edit');
Route::put('/user/{id}', 'UserController@update');

Route::get('room-category', 'RoomCategoryController@index');
Route::get('room-category/create', 'RoomCategoryController@create');
Route::post('room-category', 'RoomCategoryController@store');
Route::get('room-category/{id}/edit', 'RoomCategoryController@edit');
Route::put('room-category/{id}', 'RoomCategoryController@update');

Route::get('room', 'RoomController@index');
Route::get('room/create', 'RoomController@create');
Route::post('room', 'RoomController@store');
Route::get('room/{id}/edit', 'RoomController@edit');
Route::put('room/{id}', 'RoomController@update');
