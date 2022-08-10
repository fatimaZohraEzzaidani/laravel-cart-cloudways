<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = [
            [
                'name' => 'Apple Macbook Pro 16',
                'details' => 'Apple M1 Pro, 16 GPU, 16 GB, 512 GB SSD',
                'description' => 'The most powerful MacBook Pro ever is here. With the blazing-fast M1 Pro or M1 Max chip — the first Apple silicon designed for pros — you get groundbreaking performance and amazing battery life. Add to that a stunning Liquid Retina XDR display, the best camera and audio ever in a Mac notebook, and all the ports you need. The first notebook of its kind, this MacBook Pro is a beast.',
                'brand' => 'Apple',
                'price' => 2999,
                'shipping_cost' => 25,
                'image_path' => 'storage/product.png'
            ],
            [
                'name' => 'Sumsung Galaxy Book Pro',
                'details' => '13.3 inch, 8GB, DDR4 SDRAM, 256 GB',
                'description' => 'SAMSUNG 15.6” Galaxy Book2 Pro Laptop Computer, i7 / 16GB / 512GB, 12th Gen Intel Core Processor, Evo Certified, Lightweight, 2022 Model, Graphite',
                'brand' => 'Sumsung',
                'price' => 1800,
                'shipping_cost' => 25,
                'image_path' => 'storage/product2.png'
            ],

        ];

        foreach ($product as $key => $value) {
            Product::create($value);
        }
    }
}
