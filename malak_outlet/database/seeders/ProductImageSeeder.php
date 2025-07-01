<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductImage;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productImages = [
            // Samsung Galaxy S24
            [
                'product_id' => 1,
                'image_path' => 'images/products/samsung-galaxy-s24-1.jpg',
                'is_primary' => true,
            ],
            [
                'product_id' => 1,
                'image_path' => 'images/products/samsung-galaxy-s24-2.jpg',
                'is_primary' => false,
            ],
            
            // iPhone 15 Pro
            [
                'product_id' => 2,
                'image_path' => 'images/products/iphone-15-pro-1.jpg',
                'is_primary' => true,
            ],
            [
                'product_id' => 2,
                'image_path' => 'images/products/iphone-15-pro-2.jpg',
                'is_primary' => false,
            ],
            
            // Sony Headphones
            [
                'product_id' => 3,
                'image_path' => 'images/products/sony-headphones-1.jpg',
                'is_primary' => true,
            ],
            
            // Nike Air Max 270
            [
                'product_id' => 4,
                'image_path' => 'images/products/nike-air-max-270-1.jpg',
                'is_primary' => true,
            ],
            [
                'product_id' => 4,
                'image_path' => 'images/products/nike-air-max-270-2.jpg',
                'is_primary' => false,
            ],
            
            // Adidas Ultraboost 22
            [
                'product_id' => 5,
                'image_path' => 'images/products/adidas-ultraboost-22-1.jpg',
                'is_primary' => true,
            ],
            
            // Zara T-Shirt
            [
                'product_id' => 6,
                'image_path' => 'images/products/zara-tshirt-1.jpg',
                'is_primary' => true,
            ],
            
            // IKEA Bookcase
            [
                'product_id' => 7,
                'image_path' => 'images/products/ikea-billy-bookcase-1.jpg',
                'is_primary' => true,
            ],
            
            // Nike Training Shirt
            [
                'product_id' => 8,
                'image_path' => 'images/products/nike-training-shirt-1.jpg',
                'is_primary' => true,
            ],
            
            // LEGO Set
            [
                'product_id' => 9,
                'image_path' => 'images/products/lego-modular-1.jpg',
                'is_primary' => true,
            ],
            [
                'product_id' => 9,
                'image_path' => 'images/products/lego-modular-2.jpg',
                'is_primary' => false,
            ],
            
            // Vitamin D3
            [
                'product_id' => 10,
                'image_path' => 'images/products/vitamin-d3-1.jpg',
                'is_primary' => true,
            ],
        ];

        foreach ($productImages as $image) {
            ProductImage::create($image);
        }
    }
}
