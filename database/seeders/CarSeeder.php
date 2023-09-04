<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cars')->insert([
            [
                'brand' => 'Toyota',
                'model' => 'Corolla',
                'mil' => 50000,
                'transmission' => 'Automatic',
                'seats' => '5',
                'luggage' => 'Medium',
                'fuel_type' => 'Gasoline',
                'fuel_amount' => 'Full',
                'class' => 'Sedan',
                'desc' => 'Comfortable and reliable sedan.',
                'year' => 2022,
                'type' => 'Economy',
                'location_id' => 1,
                'price_perday' => 50,
            ],
            [
                'brand' => 'Honda',
                'model' => 'Civic',
                'mil' => 35000,
                'transmission' => 'Automatic',
                'seats' => '5',
                'luggage' => 'Medium',
                'fuel_type' => 'Gasoline',
                'fuel_amount' => 'Full',
                'class' => 'Sedan',
                'desc' => 'Stylish and efficient sedan.',
                'year' => 2021,
                'type' => 'Economy',
                'location_id' => 2,
                'price_perday' => 45,
            ],
            [
                'brand' => 'Ford',
                'model' => 'Mustang',
                'mil' => 15000,
                'transmission' => 'Manual',
                'seats' => '4',
                'luggage' => 'Small',
                'fuel_type' => 'Gasoline',
                'fuel_amount' => 'Full',
                'class' => 'Sports Car',
                'desc' => 'Iconic American muscle car.',
                'year' => 2023,
                'type' => 'Performance',
                'location_id' => 3,
                'price_perday' => 80,
            ],
            [
                'brand' => 'Toyota',
                'model' => 'RAV4',
                'mil' => 20000,
                'transmission' => 'Automatic',
                'seats' => '5',
                'luggage' => 'Large',
                'fuel_type' => 'Hybrid',
                'fuel_amount' => 'Full',
                'class' => 'SUV',
                'desc' => 'Spacious and eco-friendly SUV.',
                'year' => 2022,
                'type' => 'Hybrid',
                'location_id' => 1,
                'price_perday' => 60,
            ],
            [
                'brand' => 'BMW',
                'model' => '3 Series',
                'mil' => 28000,
                'transmission' => 'Automatic',
                'seats' => '5',
                'luggage' => 'Medium',
                'fuel_type' => 'Diesel',
                'fuel_amount' => 'Full',
                'class' => 'Luxury',
                'desc' => 'Elegance and performance in one package.',
                'year' => 2020,
                'type' => 'Luxury',
                'location_id' => 4,
                'price_perday' => 90,
            ],
            [
                'brand' => 'Volkswagen',
                'model' => 'Golf',
                'mil' => 40000,
                'transmission' => 'Manual',
                'seats' => '5',
                'luggage' => 'Small',
                'fuel_type' => 'Diesel',
                'fuel_amount' => 'Full',
                'class' => 'Hatchback',
                'desc' => 'Compact and versatile hatchback.',
                'year' => 2019,
                'type' => 'Compact',
                'location_id' => 2,
                'price_perday' => 40,
            ],
            [
                'brand' => 'Mercedes-Benz',
                'model' => 'E-Class',
                'mil' => 22000,
                'transmission' => 'Automatic',
                'seats' => '5',
                'luggage' => 'Large',
                'fuel_type' => 'Gasoline',
                'fuel_amount' => 'Full',
                'class' => 'Executive',
                'desc' => 'Comfort and sophistication combined..',
                'year' => 2021,
                'type' => 'Luxury',
                'location_id' => 5,
                'price_perday' => 100,
            ],
        ]);
    }
}
