<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AmenitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $amenities = [
            'Equiped Kitchen', 'Gym', 'Media room', 'TV Set', 'Laundry', 'Yard', 'Basketball court',
            'Hot Bath', 'Garage Attached', 'Front yard', 'Pool', 'Central air', 'Electricity',
            'Heating', 'Natural Gas', 'Ventilation', 'Water', 'Accessible', 'Elevator', 'Fireplace',
            'Smoke detectors', 'Washer and dryer', 'WIFI', 'Window Covering', 'Spa & Massage',
            'Pets Allow', 'Alarm', 'Central Heating', 'Car Parking', 'Free WiFi', 'Laundry Room'
        ];

        foreach ($amenities as $amenity) {
            DB::table('amenities')->insert([
                'amenity_name' => $amenity,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
