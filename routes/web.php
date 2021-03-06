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

Route::get('/room-category', 'RoomCategoryController@index');
Route::get('/room-category/create', 'RoomCategoryController@create');
Route::post('/room-category', 'RoomCategoryController@store');
Route::get('/room-category/{id}/edit', 'RoomCategoryController@edit');
Route::put('/room-category/{id}', 'RoomCategoryController@update');

Route::get('/room', 'RoomController@index');
Route::get('/room/create', 'RoomController@create');
Route::post('/room', 'RoomController@store');
Route::get('/room/{id}/edit', 'RoomController@edit');
Route::put('/room/{id}', 'RoomController@update');

Route::get('/customer', 'CustomerController@index');
Route::get('/customer/create', 'CustomerController@create');
Route::post('/customer', 'CustomerController@store');
Route::get('/customer/{id}/edit', 'CustomerController@edit');
Route::put('/customer/{id}', 'CustomerController@update');

Route::get('/room-reservation/{id}/change-status', 'RoomReservationController@changeStatus');
Route::put('/room-reservation/{id}/update-status', 'RoomReservationController@updateStatus');

Route::get('/room-reservation', 'RoomReservationController@index');
Route::get('/room-reservation/create', 'RoomReservationController@create');
Route::post('/room-reservation', 'RoomReservationController@store');
Route::get('/room-reservation/{id}/edit', 'RoomReservationController@edit');
Route::put('/room-reservation/{id}', 'RoomReservationController@update');
Route::get('/room-reservation/room-info-show', 'RoomReservationController@roomInfoShow');

Route::get('/payable-by-customer/download-excel', 'PayableByCustomerController@downloadExcel');
Route::get('/payable-by-customer', 'PayableByCustomerController@index');
Route::get('/payable-by-customer/create', 'PayableByCustomerController@create');
Route::post('/payable-by-customer', 'PayableByCustomerController@store');
Route::get('/payable-by-customer/{id}/edit', 'PayableByCustomerController@edit');
Route::put('/payable-by-customer/{id}', 'PayableByCustomerController@update');
Route::get('/payable-by-customer/{id}', 'PayableByCustomerController@show');
Route::get('/payable-by-customer/reservation-info-show', 'PayableByCustomerController@reservationInfoShow');


Route::get('/receivable-by-hotel', 'ReceivableByHotelController@index');
Route::get('/receivable-by-hotel/create', 'ReceivableByHotelController@create');
Route::post('/receivable-by-hotel', 'ReceivableByHotelController@store');
Route::get('/receivable-by-hotel/{id}/edit', 'ReceivableByHotelController@edit');
Route::put('/receivable-by-hotel/{id}', 'ReceivableByHotelController@update');

Route::get('/report/payable-by-customer-form', 'ReportPayableByCustomerController@index');
Route::post('/report/payable-by-customer-show', 'ReportPayableByCustomerController@showReport');

Route::get('/user-export', 'UserController@export');