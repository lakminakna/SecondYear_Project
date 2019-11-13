<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Landowner extends Model
{
    protected $fillable = [
      'first_name' ,
      'last_name' ,
      'gender' ,
      'contact_no' ,
      'nic' ,
      'email' ,
      'no_of_lands' ,
      'username' ,
      'password'
    ];
}
