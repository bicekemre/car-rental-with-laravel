<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desc extends Model
{
    use HasFactory;


    public function car()
    {
        $this->belongsTo(Car::class, 'car_id', 'id');
    }
}
