<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $usesUniqueIds
 * @property int $car_id
 * @property int $user_id
 * @property integer $pickup_date
 * @property integer $return_date
 * @property int $pickup_location
 * @property int $return_location
 * @property double $price
 * @property bool $is_completed
 */
class Reservation extends Model
{
    use HasFactory;
}
