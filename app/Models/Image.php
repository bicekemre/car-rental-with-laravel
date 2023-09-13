<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $url
 * @property int $seq
 * @property string $imageable_type
 * @property int $imageable_id
 */

class Image extends Model
{
    use HasFactory;

    public function imageable()
    {
        return $this->morphTo();
    }
}
