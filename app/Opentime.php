<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opentime extends Model
{
    protected $fillable = [
      'first_name' ,
      'last_name' ,
      'gender' ,
      'contact_no',
      'address' ,
      'licence_id' ,
      'nic' ,
      'email' ,
      'image' ,
      'username' ,
      'password'
      
    ];
}
