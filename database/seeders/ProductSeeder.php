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
        Product::insert([
            ['name' => 'Laptop', 'price' => 500, 'image' => 'laptop.jpg'],
            ['name' => 'Smartphone', 'price' => 300, 'image' => 'smartphone.jpg'],
            ['name' => 'Headphones', 'price' => 50, 'image' => 'headphones.jpg'],
        ]);
    }
}
