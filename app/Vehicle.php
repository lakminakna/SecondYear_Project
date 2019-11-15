<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = [
      'driver_id' ,
      'vehicle_no' ,
      'type' ,
      'colour'
    ];
}
