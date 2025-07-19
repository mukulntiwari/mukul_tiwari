<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'name' => 'Wooden Chair',
            'description' => 'A stylish wooden chair with ergonomic design.',
            'price' => 1500,
            'quantity' => 10,
            'image' => 'images/wooden_chair.jpg',
        ]);

        Product::create([
            'name' => 'Office Table',
            'description' => 'Spacious office table with drawers and cable holes.',
            'price' => 3200,
            'quantity' => 5,
            'image' => 'images/office_table.jpg',
        ]);

        Product::create([
            'name' => 'Bookshelf',
            'description' => 'Modern 5-tier bookshelf made of engineered wood.',
            'price' => 1800,
            'quantity' => 8,
            'image' => 'images/bookshelf.webp',
        ]);

        Product::create([
            'name' => 'Gaming Chair',
            'description' => 'High-back reclining gaming chair with footrest.',
            'price' => 4999,
            'quantity' => 4,
            'image' => 'images/gaming_chair.jpg',
        ]);
    }
}
