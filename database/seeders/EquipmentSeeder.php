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
            // CHAIRS
            [
                'name' => 'Gold Chiavari Chairs',
                'description' => 'Elegant gold chiavari chairs perfect for weddings and formal events',
                'category' => 'chairs',
                'price_per_day' => 800.00,
                'quantity_available' => 100,
                'image' => '/images/gold chairvary chair.jpg'
            ],
            [
                'name' => 'VIP High Back Chairs',
                'description' => 'Premium VIP high back chairs for elegant events',
                'category' => 'chairs',
                'price_per_day' => 6000,
                'quantity_available' => 80,
                'image' => '/images/straight back vip chair.jpg'
            ],
            [
                'name' => 'Executive VIP Chairs',
                'description' => 'Top-tier executive VIP chairs for high-end events',
                'category' => 'chairs',
                'price_per_day' => 6000,
                'quantity_available' => 60,
                'image' => '/images/excecutive vip chairs.jpg'
            ],
            [
                'name' => 'Gold VIP Chairs',
                'description' => 'Stunning gold VIP chairs for luxury events',
                'category' => 'chairs',
                'price_per_day' => 6000,
                'quantity_available' => 70,
                'image' => '/images/gold VIP chairs.jpg'
            ],
            [
                'name' => 'Louis Ghost Chairs',
                'description' => 'Modern clear louis ghost chairs for contemporary events',
                'category' => 'chairs',
                'price_per_day' => 8000,
                'quantity_available' => 50,
                'image' => '/images/louis clear chair.jpg'
            ],
            [
                'name' => 'Clear Acrylic Chairs',
                'description' => 'Sleek clear acrylic chairs for modern event setups',
                'category' => 'chairs',
                'price_per_day' => 1500,
                'quantity_available' => 80,
                'image' => '/images/clear chairs.jpg'
            ],
            [
                'name' => 'Brown Crossback Chairs',
                'description' => 'Rustic brown crossback chairs ideal for outdoor and garden events',
                'category' => 'chairs',
                'price_per_day' => 2000,
                'quantity_available' => 120,
                'image' => '/images/brown cross back chair.jpg'
            ],
            [
                'name' => 'Chameleon Chairs',
                'description' => 'Versatile chameleon chairs suitable for any event theme',
                'category' => 'chairs',
                'price_per_day' => 2500,
                'quantity_available' => 100,
                'image' => '/images/chameleon chairs.jpg'
            ],
            [
                'name' => 'Florence Chairs',
                'description' => 'Elegant florence chairs for weddings and formal dinners',
                'category' => 'chairs',
                'price_per_day' => 9000,
                'quantity_available' => 60,
                'image' => '/images/florence chair with a round  table.jpg'
            ],
            [
                'name' => 'Black Belle Chairs',
                'description' => 'Sophisticated black belle chairs for formal events',
                'category' => 'chairs',
                'price_per_day' => 2000,
                'quantity_available' => 80,
                'image' => '/images/black belle chair.jpg'
            ],
            // TABLES
            [
                'name' => 'Glass Top VIP Table',
                'description' => 'Premium glass top VIP table for high-end event setups',
                'category' => 'tables',
                'price_per_day' => 55000,
                'quantity_available' => 10,
                'image' => '/images/vip tables settings.jpg'
            ],
            [
                'name' => 'Round Banquet Tables',
                'description' => 'Classic round banquet tables seating 8-10 guests',
                'category' => 'tables',
                'price_per_day' => 6500,
                'quantity_available' => 50,
                'image' => '/images/clear acrlyic cchairs and round banquet table.jpg'
            ],
            [
                'name' => 'Rectangular Banquet Table',
                'description' => 'Sturdy rectangular banquet tables for buffet and dining setups',
                'category' => 'tables',
                'price_per_day' => 6000,
                'quantity_available' => 40,
                'image' => '/images/chameleon chairs and a roundtable.jpg'
            ],
            [
                'name' => 'VIP Chairs & Table Set',
                'description' => 'Matching VIP chairs and table set for premium event setups',
                'category' => 'tables',
                'price_per_day' => 55000,
                'quantity_available' => 10,
                'image' => '/images/vip chairs and vip table.jpg'
            ],
            [
                'name' => 'Louis Ghost Chair & Table',
                'description' => 'Louis ghost chairs paired with matching table',
                'category' => 'tables',
                'price_per_day' => 8000,
                'quantity_available' => 20,
                'image' => '/images/louis ghost chair and a table.jpg'
            ],
            // CANOPIES
            [
                'name' => '15x30m Marquee Tent',
                'description' => 'Large 15x30m marquee tent for big outdoor events',
                'category' => 'canopies',
                'price_per_day' => 1500000,
                'quantity_available' => 3,
                'image' => '/images/15by30m marquee.jpg'
            ],
            [
                'name' => '15x60m Marquee Tent',
                'description' => 'Extra large 15x60m marquee tent for massive gatherings',
                'category' => 'canopies',
                'price_per_day' => 3000000,
                'quantity_available' => 2,
                'image' => '/images/15by60m marquee tent.jpg'
            ],
            [
                'name' => '20x20ft Pagoda Tent',
                'description' => 'Elegant 20x20ft pagoda tent for outdoor ceremonies',
                'category' => 'canopies',
                'price_per_day' => 80000,
                'quantity_available' => 5,
                'image' => '/images/20by20ft pagoda tent.jpg'
            ],
            [
                'name' => 'Transparent Marquee 12x24ft',
                'description' => 'Stunning transparent marquee for elegant outdoor events',
                'category' => 'canopies',
                'price_per_day' => 1000000,
                'quantity_available' => 2,
                'image' => '/images/transparent marquee.jpg'
            ],
            [
                'name' => 'White Pagoda Tent',
                'description' => 'Classic white pagoda tent for weddings and parties',
                'category' => 'canopies',
                'price_per_day' => 80000,
                'quantity_available' => 6,
                'image' => '/images/white pagoda tent.jpg'
            ],
            [
                'name' => 'Festival Pagoda Tent',
                'description' => 'Vibrant festival pagoda tent for outdoor celebrations',
                'category' => 'canopies',
                'price_per_day' => 80000,
                'quantity_available' => 8,
                'image' => '/images/pagoda festival.jpg'
            ],
            [
                'name' => 'Imported Pagoda Tent',
                'description' => 'Premium imported pagoda tent for luxury outdoor events',
                'category' => 'canopies',
                'price_per_day' => 80000,
                'quantity_available' => 4,
                'image' => '/images/imported pagoda.jpg'
            ],
            [
                'name' => 'Marquee Setup',
                'description' => 'Full marquee setup service for large outdoor events',
                'category' => 'canopies',
                'price_per_day' => 1500000,
                'quantity_available' => 3,
                'image' => '/images/marquee setup.jpg'
            ],
            // FLOORING
            [
                'name' => 'Tent with Flooring (20x40ft)',
                'description' => 'Complete tent and flooring package for outdoor events',
                'category' => 'flooring',
                'price_per_day' => 80000,
                'quantity_available' => 3,
                'image' => '/images/20by40ft tent with flooring.jpg'
            ],
            [
                'name' => 'Green Turf (7x20ft)',
                'description' => 'Premium green turf flooring for outdoor events',
                'category' => 'flooring',
                'price_per_day' => 35000,
                'quantity_available' => 6,
                'image' => '/images/7by40ft green turf.jpg'
            ],
            [
                'name' => 'Green Turf (7x40ft)',
                'description' => 'Large green turf flooring for bigger outdoor spaces',
                'category' => 'flooring',
                'price_per_day' => 60000,
                'quantity_available' => 4,
                'image' => '/images/new green turfs.jpg'
            ],
            [
                'name' => 'Red/Black Rug (13x40ft)',
                'description' => 'Luxurious red or black rug for VIP event entrances and halls',
                'category' => 'flooring',
                'price_per_day' => 75000,
                'quantity_available' => 5,
                'image' => '/images/large red rug.jpg'
            ],
        ];

        foreach ($equipment as $item) {
            Equipment::create($item);
        }
    }
}
