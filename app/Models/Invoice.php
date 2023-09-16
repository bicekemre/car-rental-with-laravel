<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property $reservation_id
 * @property $name
 * @property $address
 * @property $city
 * @property $zip
 */
class Invoice extends Model
{
    use HasFactory;
}
