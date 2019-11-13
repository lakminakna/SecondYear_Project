<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parking_vehicle_type extends Model
{
    protected $fillable = [
      'parking_space_id' ,
      'vehicle_type' ,
      'total_no_of_vehicles' ,
      'no_of_vehicles_parked' ,
      'amount_per_hour'
    ];
}
