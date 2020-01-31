<?php

namespace App\Http\Controllers;


//use Illuminate\Http\Request;
use Request;
use DB;
use App\Parking_space;
use App\Reservation;
use App\Parking_vehicle_type;
use App\Landowner;
use App\Contact;

class SearchController extends Controller
{
  function searchAdmin(){

    $q = Request::get ( 'q' );
    $parking_spaces = Parking_space::where('name','LIKE','%'.$q.'%')->orWhere('address','LIKE','%'.$q.'%')->get();

    $username = Request::get ( 'username' );
    $password = Request::get ( 'password' );

    $contacts = Contact::all();
    $data = DB::table('admins')->where(['username'=>$username,'password'=>$password])->get();
    $id = DB::table('admins')->where(['username'=>$username,'password'=>$password])->first();
    // $admins = DB::table('admins')->get();
    $reviews = DB::table('reviews')->get();

    if(count($parking_spaces) > 0)
        return view('home.signup_login.login.admin.index',compact('username','password','data','id','parking_spaces','reviews','contacts'))->withDetails($parking_spaces)->withQuery ( $q );
    else{
        $parking_spaces = [];
        return view ('home.signup_login.login.admin.index',compact('username','password','data','id','parking_spaces','reviews','contacts'))->withMessage('No Details found. Try to search again !');

        }
    }
}