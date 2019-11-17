<?php

/* ErrorException  COMMENT ALL THE FOLLOWING USES*/

// //use Illuminate\Http\Request;
// use Request;
// use DB;
// use App\Parking_space;
// use App\Reservation;
// use App\Parking_vehicle_type;
// use App\Landowner;
// use App\Contact;

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
Route::get('home', function () {return view('home/index');}); // home is same as '/'
Route::get('services', function () {return view('home/services');});
Route::get('privacy_policy', function () {return view('home/privacy_policy');});
Route::get('pricing', function () {return view('home/pricing');});
Route::get('help', function () {return view('home/help');});
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
Route::resource('contact_us', 'Contact_usController');

// USER Login & Register
Route::get('lr', function () {return view('Register/landowner');});
Route::resource('lrs', 'Auth/RegisterController');

// Route::get('test', function () {return view('home/signup_login/login/landowner/login_temp');});

Route::get('ll', function () {return view('home/signup_login/login/landowner/login');});
Route::get('ld', function () {return view('home/signup_login/login/driver/login');});
Route::get('la', function () {return view('home/signup_login/login/admin/login');});

Route::post('/loginlandowner','User_loginController@landowner_login');
Route::post('/logindriver','User_loginController@driver_login');
Route::post('/loginadmin','User_loginController@admin_login');
// Route::post('/adminrefresh','User_loginController@adminindex');
Route::get('/landDetails','Parking_spaceController@detailsIndex');
Route::get('/landEdit','Parking_spaceController@editIndex');


// Route::get('landpage', function () {return view('home/signup_login/login/index');});
Route::resource('landownerpage', 'LandownerpageController');
Route::resource('adminpage', 'adminloginController');



/*Search*/
Route::any('/search','SearchController@searchAdmin'); 
