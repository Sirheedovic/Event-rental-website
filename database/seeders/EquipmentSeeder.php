<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Equipment;

class EquipmentSeeder extends Seeder
{
    public function run(): void
    {
        $equipment = [
            [
                'name' => 'Chiavari Chairs',
                'description' => 'Elegant gold chiavari chairs perfect for weddings and formal events',
                'category' => 'chairs',
                'price_per_day' => 8.50,
                'quantity_available' => 100,
                'image' => '/images/o-white.jpeg'
            ],
            [
                'name' => 'VIP Straight Back Chairs',
                'description' => 'Premium VIP chairs with straight back design for elegant events',
                'category' => 'chairs',
                'price_per_day' => 10.00,
                'quantity_available' => 80,
                'image' => '/images/Vip chairs straight back.jpeg'
            ],
            [
                'name' => 'White Folding Chairs',
                'description' => 'Comfortable white folding chairs for any occasion',
                'category' => 'chairs',
                'price_per_day' => 3.50,
                'quantity_available' => 200,
                'image' => '/images/o-white2.jpeg'
            ],
            [
                'name' => 'Round Tables (60")',
                'description' => '60-inch round tables seating 8-10 guests',
                'category' => 'tables',
                'price_per_day' => 12.00,
                'quantity_available' => 50,
                'image' => '/images/20260104_134132.jpg.jpeg'
            ],
            [
                'name' => 'Rectangular Tables (8ft)',
                'description' => '8-foot rectangular tables perfect for buffets and displays',
                'category' => 'tables',
                'price_per_day' => 10.00,
                'quantity_available' => 40,
                'image' => '/images/20260104_134233.jpg.jpeg'
            ],
            [
                'name' => 'Premium Round Tables',
                'description' => 'High-quality round tables with elegant finish',
                'category' => 'tables',
                'price_per_day' => 15.00,
                'quantity_available' => 30,
                'image' => '/images/20260104_134237.jpg.jpeg'
            ],
            [
                'name' => 'Banquet Tables',
                'description' => 'Long banquet tables ideal for large gatherings',
                'category' => 'tables',
                'price_per_day' => 14.00,
                'quantity_available' => 35,
                'image' => '/images/20260104_134240.jpg.jpeg'
            ],
            [
                'name' => 'Cocktail Tables',
                'description' => 'Tall cocktail tables perfect for standing receptions',
                'category' => 'tables',
                'price_per_day' => 11.00,
                'quantity_available' => 25,
                'image' => '/images/20260104_134244.jpg.jpeg'
            ],
            [
                'name' => 'Wedding Canopy (20x30)',
                'description' => 'Large white wedding canopy for outdoor ceremonies',
                'category' => 'canopies',
                'price_per_day' => 150.00,
                'quantity_available' => 5,
                'image' => '/images/IMG-20231124-WA0019.jpg.jpeg'
            ],
            [
                'name' => 'Party Tent (10x20)',
                'description' => 'Medium-sized party tent for outdoor events',
                'category' => 'canopies',
                'price_per_day' => 85.00,
                'quantity_available' => 10,
                'image' => '/images/IMG-20231218-WA0009.jpg.jpeg'
            ],
            [
                'name' => 'Premium Event Canopy',
                'description' => 'Elegant canopy with decorative draping',
                'category' => 'canopies',
                'price_per_day' => 180.00,
                'quantity_available' => 4,
                'image' => '/images/IMG-20231220-WA0019.jpg.jpeg'
            ],
            [
                'name' => 'Garden Canopy',
                'description' => 'Beautiful outdoor canopy for garden events',
                'category' => 'canopies',
                'price_per_day' => 120.00,
                'quantity_available' => 6,
                'image' => '/images/IMG-20231229-WA0036.jpg.jpeg'
            ],
            [
                'name' => 'Dance Floor (20x20)',
                'description' => 'Professional dance floor with smooth finish',
                'category' => 'flooring',
                'price_per_day' => 200.00,
                'quantity_available' => 3,
                'image' => '/images/20260107_094637.jpg.jpeg'
            ],
            [
                'name' => 'Premium Dance Floor',
                'description' => 'High-end dance floor with LED lighting options',
                'category' => 'flooring',
                'price_per_day' => 250.00,
                'quantity_available' => 2,
                'image' => '/images/20260107_094708.jpg.jpeg'
            ],
            [
                'name' => 'Outdoor Flooring',
                'description' => 'Weather-resistant flooring for outdoor events',
                'category' => 'flooring',
                'price_per_day' => 180.00,
                'quantity_available' => 4,
                'image' => '/images/20260107_094716.jpg.jpeg'
            ],
            [
                'name' => 'Sound System Package',
                'description' => 'Complete sound system with microphones and speakers',
                'category' => 'audio',
                'price_per_day' => 125.00,
                'quantity_available' => 8,
                'image' => '/images/20260107_125705.jpg.jpeg'
            ],
            [
                'name' => 'Premium Audio System',
                'description' => 'High-end audio system with wireless microphones',
                'category' => 'audio',
                'price_per_day' => 180.00,
                'quantity_available' => 5,
                'image' => '/images/20260107_125708.jpg.jpeg'
            ],
            [
                'name' => 'DJ Sound Equipment',
                'description' => 'Professional DJ equipment with mixing console',
                'category' => 'audio',
                'price_per_day' => 200.00,
                'quantity_available' => 4,
                'image' => '/images/20260107_125940.jpg.jpeg'
            ]
        ];

        foreach ($equipment as $item) {
            Equipment::create($item);
        }
    }
}
