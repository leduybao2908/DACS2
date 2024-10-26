<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('properties')->insert([
            [
                'property_title' => 'Luxury Apartment',
                'location' => '123 Main Street, Cityville',
                'price_per_month' => 1200.00,
                'electricity_price' => 50.00,
                'water_price' => 30.00,
                'area' => 80.50,
                'owner_id' => 1, // Thay thế bằng ID của người dùng có sẵn trong bảng users
                'description' => 'A luxurious apartment located in the heart of the city.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'property_title' => 'Cozy Studio',
                'location' => '456 Elm Street, Townsville',
                'price_per_month' => 800.00,
                'electricity_price' => 40.00,
                'water_price' => 20.00,
                'area' => 45.00,
                'owner_id' => 2, // Thay thế bằng ID của người dùng khác
                'description' => 'A cozy studio perfect for a single person.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
