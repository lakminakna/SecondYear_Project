<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
      'driver_id' ,
      'parking_space_id' ,
      'review'
    ];
}
