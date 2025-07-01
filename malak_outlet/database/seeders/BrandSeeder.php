<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            [
                'name' => 'Samsung',
                'slug' => 'samsung',
                'description' => 'South Korean multinational electronics company',
            ],
            [
                'name' => 'Apple',
                'slug' => 'apple',
                'description' => 'American technology company',
            ],
            [
                'name' => 'Nike',
                'slug' => 'nike',
                'description' => 'American athletic footwear and apparel corporation',
            ],
            [
                'name' => 'Adidas',
                'slug' => 'adidas',
                'description' => 'German multinational corporation that designs and manufactures shoes',
            ],
            [
                'name' => 'Sony',
                'slug' => 'sony',
                'description' => 'Japanese multinational conglomerate corporation',
            ],
            [
                'name' => 'LG',
                'slug' => 'lg',
                'description' => 'South Korean multinational electronics company',
            ],
            [
                'name' => 'Zara',
                'slug' => 'zara',
                'description' => 'Spanish clothing retailer',
            ],
            [
                'name' => 'H&M',
                'slug' => 'hm',
                'description' => 'Swedish multinational clothing-retail company',
            ],
            [
                'name' => 'IKEA',
                'slug' => 'ikea',
                'description' => 'Swedish furniture retailer',
            ],
            [
                'name' => 'Toyota',
                'slug' => 'toyota',
                'description' => 'Japanese automotive manufacturer',
            ],
        ];

        foreach ($brands as $brand) {
            Brand::create($brand);
        }
    }
}
