<?php

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

/* home views */
Route::get('/', function () {return view('home/index');});
Route::get('home', function () {return view('home/index');}); // home is same as '/'
Route::get('services', function () {return view('home/services');});
Route::get('privacy_policy', function () {return view('home/privacy_policy');});
Route::get('pricing', function () {return view('home/pricing');});
Route::get('help', function () {return view('home/help');});

/*signin - signup views*/
Route::get('signin', function () {return view('login/base');});
Route::get('signup', function () {return view('signup/base');});
Route::get('images', function () {return view('login/tabs/card2');});

/* USER Login views */
Route::get('ll', function () {return view('login/users/landownerLogin');});
Route::get('ld', function () {return view('login/users/driverLogin');});
Route::get('la', function () {return view('login/users/adminLogin');});

// CRUD Controllers
Route::resource('drivers', 'DriverController');
Route::resource('landowners', 'LandownerController');
Route::resource('parking_spaces', 'Parking_spaceController');
Route::resource('parking_vehicle_types', 'Parking_vehicle_typeController');
Route::resource('reservations', 'ReservationController');
Route::resource('reviews', 'ReviewController');
Route::resource('vehicles', 'VehicleController');
Route::resource('contact_us', 'Contact_usController');
Route::resource('admins', 'AdminController');
Route::resource('opentimes', 'OpentimeController');

/* USER Login controllers */
Route::post('/loginlandowner','User_loginController@landowner_login');
Route::post('/logindriver','User_loginController@driver_login');
Route::post('/loginadmin','User_loginController@admin_login');


Route::get('/landDetails','Parking_spaceController@detailsIndex');
Route::get('/landEdit','Parking_spaceController@editIndex');



Route::resource('landownerpage', 'LandownerpageController');
Route::resource('adminpage', 'adminloginController');


/*Search*/
Route::any('/search','SearchController@searchAdmin');

/* Temporary */
Route::get('temp1', function () {return view('Temp/1/index');});
Route::get('temp2', function () {return view('Temp/2/index');});
Route::get('temp3', function () {return view('Temp/3/index');});

/* USER Login & Register */
Route::get('lr', function () {return view('Register/landowner');});
Route::resource('lrs', 'Auth/RegisterController');
