<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Parking_space;
use App\Reservation;
use App\Parking_vehicle_type;
use App\Landowner;
use App\Contact;

class User_loginController extends Controller
{
  function adminIndex()
  {
    $contacts = Contact::all();
    $parking_spaces = Parking_space::all();
    $id = DB::table('admins')->where(['username'=>$username,'password'=>$password])->first();
    $reviews = DB::table('reviews')->get();
    $data = DB::table('admins')->where(['username'=>$username,'password'=>$password])->get();

    return view('home.signup_login.login.admin.index', compact('username','password','data','id','parking_spaces','reviews','contacts'));

  }
  function driverIndex()
  {
    $landowners = Landowner::all();
    $parking_spaces = Parking_space::all();
    $reservations = Reservation::all();
    $paking_spaces = Parking_vehicle_type::all();

    return view('home.signup_login.login.landowner.index', compact('parking_spaces','reservations','paking_spaces','landowners'));

  }
  function landownerIndex()
  {
    $landowners = Landowner::all();
    $parking_spaces = Parking_space::all();
    $reservations = Reservation::all();
    $paking_spaces = Parking_vehicle_type::all();

    return view('home.signup_login.login.landowner.index', compact('parking_spaces','reservations','paking_spaces','landowners'));

  }
  public function landowner_login(Request $req)
  {
    $username = $req->input('username');
    $password = $req->input('password');

    $checkLogin = DB::table('landowners')->where(['username'=>$username,'password'=>$password])->get();
    if(count($checkLogin)  >0)
    {
      // echo "Login SuccessFull<br/>";
      $landowners = Landowner::all();
      //$parking_spaces = Parking_space::all();
      //$reservations = Reservation::all();
      $parking_space_vehicle = Parking_vehicle_type::all();

      $id = DB::table('landowners')->where(['username'=>$username,'password'=>$password])->first();
      $landowner_parking_spaces = DB::table('parking_spaces')->where('landowner_id',$id->id)->get();
      $landowner_parking_spaces_count = DB::table('parking_spaces')->where('landowner_id',$id->id)->count();
      $reservations = DB::table('reservations')->join('parking_spaces', 'reservations.parking_space_id', '=', 'parking_spaces.id')->where('landowner_id',$id->id)->get();
      $reservations_count = DB::table('reservations')->join('parking_spaces', 'reservations.parking_space_id', '=', 'parking_spaces.id')->where('landowner_id',$id->id)->count();
      $parking_types = DB::table('parking_vehicle_types')->join('parking_spaces', 'parking_vehicle_types.parking_space_id', '=', 'parking_spaces.id')->where('landowner_id',$id->id)->get();

      return view('users.landowner.index', compact('id','parking_types','reservations','landowner_parking_spaces','landowners','reservations_count','landowner_parking_spaces_count'));
    }
    else
    {
      echo "Login Faield Wrong Data Passed";
      return view('login.user.landownerLogin');

    }
  }
  public function driver_login(Request $req)
  {
    $username = $req->input('username');
    $password = $req->input('password');

    $checkLogin = DB::table('drivers')->where(['username'=>$username,'password'=>$password])->get();
    if(count($checkLogin)  >0)
    {
      // echo "Login SuccessFull<br/>";
      $landowners = Landowner::all();
      $parking_spaces = Parking_space::all();
      $reservations = Reservation::all();
      $paking_spaces = Parking_vehicle_type::all();

      return view('users.driver.index', compact('parking_spaces','reservations','paking_spaces','landowners'));
    }
    else
    {
      echo "Login Faield Wrong Data Passed";
      return view('login.users.driverLogin');

    }
  }
  public function admin_login(Request $req)
  {
    $username = $req->input('username');
    $password = $req->input('password');

    $data = DB::table('admins')->where(['username'=>$username,'password'=>$password])->get();
    if(count($data)  >0)
    {
      // echo "Login SuccessFull<br/>";
      //echo $id[0]->id;
      $contacts = Contact::all();
      $parking_spaces = Parking_space::all();

      $id = DB::table('admins')->where(['username'=>$username,'password'=>$password])->first();
      // $admins = DB::table('admins')->get();
      $reviews = DB::table('reviews')->get();

      return view('users.admin.index', compact('username','password','data','id','parking_spaces','reviews','contacts'));
    }
    else
    {
      echo "Login Faield Wrong Data Passed";
      return view('login.users.adminLogin');

    }
  }
}
?>
