<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property $name_surname
 * @property $number
 * @property $expration_date
 * @property $cvv
 */
class Card extends Model
{
    use HasFactory;
}
