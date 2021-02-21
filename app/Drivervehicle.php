<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drivervehicle extends Model
{
    protected $fillable = [
        'email','type', 'model','number'
    ];
}
