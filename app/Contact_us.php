<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact_us extends Model
{
    protected $fillable = [
      'first_name' ,
      'last_name' ,
      'email' ,
      'phone_no',
      'description'
    ];
}
