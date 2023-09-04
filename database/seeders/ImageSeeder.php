<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('images')->insert([
            [
                'url' => 'images/toyota-corolla.jpg',
                'seq' =>  1,
                'imageable_type' => 'App\Models\Car',
                'imageable_id' => 1,
            ],
            [
                'url' => 'images/honda.jpeg',
                'seq' =>  1,
                'imageable_type' => 'App\Models\Car',
                'imageable_id' => 2,
            ],
            [
                'url' => 'images/ford.jpeg',
                'seq' =>  1,
                'imageable_type' => 'App\Models\Car',
                'imageable_id' => 3,
            ],
            [
                'url' => 'images/toyota-rav4.jpeg',
                'seq' =>  1,
                'imageable_type' => 'App\Models\Car',
                'imageable_id' => 4,
            ],
            [
                'url' => 'images/bmw.jpeg',
                'seq' =>  1,
                'imageable_type' => 'App\Models\Car',
                'imageable_id' => 5,
            ],
            [
                'url' => 'images/volkswagen.jpeg',
                'seq' =>  1,
                'imageable_type' => 'App\Models\Car',
                'imageable_id' => 6,
            ],
            [
                'url' => 'images/mercedes.png',
                'seq' =>  1,
                'imageable_type' => 'App\Models\Car',
                'imageable_id' => 7,
            ],
        ]);
    }
}
