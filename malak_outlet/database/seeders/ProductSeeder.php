<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            // Electronics
            [
                'name' => 'Samsung Galaxy S24',
                'slug' => 'samsung-galaxy-s24',
                'description' => 'Latest Samsung flagship smartphone with advanced camera system',
                'price' => 999.99,
                'sale_price' => 899.99,
                'sku' => 'SAM-GS24-001',
                'stock_quantity' => 50,
                'category_id' => 1, // Electronics
                'brand_id' => 1, // Samsung
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'name' => 'iPhone 15 Pro',
                'slug' => 'iphone-15-pro',
                'description' => 'Apple iPhone 15 Pro with titanium design and A17 Pro chip',
                'price' => 1199.99,
                'sale_price' => null,
                'sku' => 'APL-IP15P-001',
                'stock_quantity' => 30,
                'category_id' => 1, // Electronics
                'brand_id' => 2, // Apple
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'name' => 'Sony WH-1000XM5 Headphones',
                'slug' => 'sony-wh-1000xm5-headphones',
                'description' => 'Premium wireless noise-canceling headphones',
                'price' => 399.99,
                'sale_price' => 349.99,
                'sku' => 'SON-WH1000-001',
                'stock_quantity' => 75,
                'category_id' => 1, // Electronics
                'brand_id' => 5, // Sony
                'is_featured' => false,
                'is_active' => true,
            ],
            
            // Clothing
            [
                'name' => 'Nike Air Max 270',
                'slug' => 'nike-air-max-270',
                'description' => 'Comfortable running shoes with Air Max technology',
                'price' => 150.00,
                'sale_price' => 120.00,
                'sku' => 'NIK-AM270-001',
                'stock_quantity' => 100,
                'category_id' => 2, // Clothing
                'brand_id' => 3, // Nike
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'name' => 'Adidas Ultraboost 22',
                'slug' => 'adidas-ultraboost-22',
                'description' => 'High-performance running shoes with Boost technology',
                'price' => 180.00,
                'sale_price' => null,
                'sku' => 'ADI-UB22-001',
                'stock_quantity' => 80,
                'category_id' => 2, // Clothing
                'brand_id' => 4, // Adidas
                'is_featured' => false,
                'is_active' => true,
            ],
            [
                'name' => 'Zara Basic T-Shirt',
                'slug' => 'zara-basic-tshirt',
                'description' => 'Cotton basic t-shirt available in multiple colors',
                'price' => 25.99,
                'sale_price' => 19.99,
                'sku' => 'ZAR-BTS-001',
                'stock_quantity' => 200,
                'category_id' => 2, // Clothing
                'brand_id' => 7, // Zara
                'is_featured' => false,
                'is_active' => true,
            ],
            
            // Home & Garden
            [
                'name' => 'IKEA BILLY Bookcase',
                'slug' => 'ikea-billy-bookcase',
                'description' => 'Classic bookcase with adjustable shelves',
                'price' => 60.00,
                'sale_price' => null,
                'sku' => 'IKE-BILLY-001',
                'stock_quantity' => 40,
                'category_id' => 3, // Home & Garden
                'brand_id' => 9, // IKEA
                'is_featured' => false,
                'is_active' => true,
            ],
            
            // Sports & Fitness
            [
                'name' => 'Nike Dri-FIT Training Shirt',
                'slug' => 'nike-dri-fit-training-shirt',
                'description' => 'Moisture-wicking training shirt for athletic performance',
                'price' => 35.00,
                'sale_price' => 28.00,
                'sku' => 'NIK-DFTS-001',
                'stock_quantity' => 120,
                'category_id' => 4, // Sports & Fitness
                'brand_id' => 3, // Nike
                'is_featured' => false,
                'is_active' => true,
            ],
            
            // Toys & Games
            [
                'name' => 'LEGO Creator Expert Modular Building',
                'slug' => 'lego-creator-expert-modular',
                'description' => 'Advanced LEGO building set for expert builders',
                'price' => 199.99,
                'sale_price' => 179.99,
                'sku' => 'LEG-CEM-001',
                'stock_quantity' => 25,
                'category_id' => 6, // Toys & Games
                'brand_id' => null,
                'is_featured' => true,
                'is_active' => true,
            ],
            
            // Beauty & Health
            [
                'name' => 'Vitamin D3 Supplement',
                'slug' => 'vitamin-d3-supplement',
                'description' => 'High-potency Vitamin D3 for bone and immune health',
                'price' => 24.99,
                'sale_price' => null,
                'sku' => 'VIT-D3-001',
                'stock_quantity' => 150,
                'category_id' => 7, // Beauty & Health
                'brand_id' => null,
                'is_featured' => false,
                'is_active' => true,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
