<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property int $car_id
 * @property int $is_set
 */
class Features extends Model
{
    use HasFactory;
}
