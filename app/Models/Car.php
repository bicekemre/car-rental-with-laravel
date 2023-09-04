<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function imageable()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function features()
    {
        return $this->hasMany(Features::class, 'car_id', 'id');
    }
}
