<?php

namespace App\Models;

use Carbon\Carbon;
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

    public function car()
    {
        return $this->belongsTo(Car::class, 'car_id', 'id');
    }

    public function dayCount($id)
    {
        $reserve = Reservation::find($id);

        $pickupDate = Carbon::createFromFormat('m/d/Y', $reserve->pickup_date ?? '0/0/0');
        $returnDate = Carbon::createFromFormat('m/d/Y', $reserve->return_date ?? '0/0/0');

        $dayAmount = $pickupDate->diffInDays($returnDate);

        return $dayAmount;
    }

    public function returnLocation()
    {
        return $this->belongsTo(Location::class, 'return_location', 'id');
    }

    public function pickupLocation()
    {
        return $this->belongsTo(Location::class, 'pickup_location', 'id');
    }
}
