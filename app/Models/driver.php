<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class driver extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'driver_name',
        'gender',
           'phone',
          'car_model',
          'location' ,
          'color',
    ];
}
