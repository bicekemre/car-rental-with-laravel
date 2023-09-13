<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * @property string  $brand
 * @property string  $model
 * @property numeric $mil
 * @property string  $transmission
 * @property string  $seats
 * @property string  $luggage
 * @property string  $fuel_type
 * @property string  $fuel_amount
 * @property string  $class
 * @property string  $desc
 * @property numeric $year
 * @property numeric $type
 * @property int     $location_id
 * @property string  $price_perday
 */


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

    public function location()
    {
        return $this->hasOne(Location::class, 'id', 'location_id');
    }
}
