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
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// Route::resource('contacts', 'ContactController');
Route::get('/', function () {return view('home/index');});
Route::get('signin', function () {return view('home/signup_login/login/base');});
Route::get('signup', function () {return view('home/signup_login/signup/base');});
Route::get('images', function () {return view('home/signup_login/login/tabs/card2');});
// Temporary
Route::get('temp1', function () {return view('Temp/1/index');});
Route::get('temp2', function () {return view('Temp/2/index');});
Route::get('temp3', function () {return view('Temp/3/index');});
// CRUD Controllers
Route::resource('drivers', 'DriverController');
Route::resource('landowners', 'LandownerController');
Route::resource('parking_spaces', 'Parking_spaceController');
Route::resource('parking_vehicle_types', 'Parking_vehicle_typeController');
Route::resource('reservations', 'ReservationController');
Route::resource('reviews', 'ReviewController');
Route::resource('vehicles', 'VehicleController');

// USER Login & Register
Route::get('lr', function () {return view('Register/landowner');});
Route::resource('lrs', 'Auth/RegisterController');



// Route::get('landpage', function () {return view('home/signup_login/login/index');});
Route::resource('landpage', 'LandpageController');
Route::resource('adminpage', 'adminloginController');
