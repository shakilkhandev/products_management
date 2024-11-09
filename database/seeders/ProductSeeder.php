<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            //            
        $products = [
            [
                'product_id' => 'PROD-001',
                'name' => 'Stainless Steel Watch',
                'description' => 'A sleek stainless steel watch with a minimalist design. Perfect for any occasion.',
                'price' => 129.99,
                'stock' => 50,
                'image' => 'https://via.placeholder.com/200x200?text=Stainless+Steel+Watch',
            ],
            [
                'product_id' => 'PROD-002',
                'name' => 'Wireless Bluetooth Headphones',
                'description' => 'High-quality sound, noise-cancellation, and a comfortable fit for all-day use.',
                'price' => 199.99,
                'stock' => 40,
                'image' => 'https://via.placeholder.com/200x200?text=Bluetooth+Headphones',
            ],
            [
                'product_id' => 'PROD-003',
                'name' => 'Smartphone X12',
                'description' => 'Latest model with a powerful processor, ultra-sharp camera, and long-lasting battery.',
                'price' => 899.99,
                'stock' => 120,
                'image' => 'https://via.placeholder.com/200x200?text=Smartphone+X12',
            ],
            [
                'product_id' => 'PROD-004',
                'name' => 'Portable Power Bank 10,000mAh',
                'description' => 'A compact power bank to keep your devices charged on the go. 10,000mAh capacity.',
                'price' => 29.99,
                'stock' => 80,
                'image' => 'https://via.placeholder.com/200x200?text=Power+Bank',
            ],
            [
                'product_id' => 'PROD-005',
                'name' => 'Leather Wallet',
                'description' => 'Premium leather wallet with multiple card slots and a sleek design.',
                'price' => 49.99,
                'stock' => 25,
                'image' => 'https://via.placeholder.com/200x200?text=Leather+Wallet',
            ],
            [
                'product_id' => 'PROD-006',
                'name' => '4K Ultra HD Smart TV',
                'description' => 'Enjoy stunning visuals with this 55-inch 4K Smart TV. Features built-in streaming apps and voice control.',
                'price' => 499.99,
                'stock' => 10,
                'image' => 'https://via.placeholder.com/200x200?text=4K+Smart+TV',
            ],
            [
                'product_id' => 'PROD-007',
                'name' => 'Electric Coffee Maker',
                'description' => 'Brew your perfect cup of coffee every morning with this easy-to-use electric coffee maker.',
                'price' => 59.99,
                'stock' => 60,
                'image' => 'https://via.placeholder.com/200x200?text=Coffee+Maker',
            ],
            [
                'product_id' => 'PROD-008',
                'name' => 'Men\'s Casual T-Shirt',
                'description' => 'Soft and comfortable t-shirt, available in a variety of colors. Ideal for casual wear.',
                'price' => 19.99,
                'stock' => 150,
                'image' => 'https://via.placeholder.com/200x200?text=Casual+T-shirt',
            ],
            [
                'product_id' => 'PROD-009',
                'name' => 'Fitness Tracker Band',
                'description' => 'Track your daily activities, monitor heart rate, and sleep patterns with this sleek fitness band.',
                'price' => 39.99,
                'stock' => 90,
                'image' => 'https://via.placeholder.com/200x200?text=Fitness+Tracker',
            ],
            [
                'product_id' => 'PROD-010',
                'name' => 'Digital Camera Z200',
                'description' => 'Capture professional-grade photos and videos with this compact digital camera.',
                'price' => 349.99,
                'stock' => 30,
                'image' => 'https://via.placeholder.com/200x200?text=Digital+Camera',
            ],
            // Add as many products as you like here
        ];

        // Insert each product into the database
        foreach ($products as $productData) {
            Product::create($productData);
        }
       

    }
}
