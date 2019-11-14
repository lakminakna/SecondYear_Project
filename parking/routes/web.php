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

//Route::get('/', function () {return view('home/welcome');});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('contacts', 'ContactController');

Route::resource('drivers', 'DriverController');
Route::resource('landowners', 'LandownerController');

Route::resource('parking_spaces', 'Parking_spaceController');
Route::resource('parking_vehicle_types', 'Parking_vehicle_typeController');

Route::resource('reservations', 'ReservationController');
Route::resource('reviews', 'ReviewController');
Route::resource('vehicles', 'VehicleController');


Route::get('lr', function () {return view('Register/landowner');});
Route::resource('lrs', 'Auth/RegisterController');

Route::get('login', function () {return view('home/signup_login/login/base');});
Route::get('signup', function () {return view('home/signup_login/signup/base');});

Route::get('tem1', function () {return view('Tem/1/index');});

Route::get('/', function () {return view('home/index');});




Route::get('landpage', function () {return view('home/signup_login/login/index');});
