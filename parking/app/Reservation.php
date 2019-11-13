<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
      'driver_id' ,
      'parking_space_id' ,
      'duration_from' ,
      'duration_to'
    ];
}
