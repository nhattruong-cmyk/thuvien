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
        Product::create([
                'name' => 'Sản phẩm 1',
                'img' => 'path/to/image1.jpg',
                'description' => 'Mô tả sản phẩm 1',
                'price' => 100.00,
                'quantity' => 10,
                'sold' => 0,
                'category_id' => 1, // Giả sử category_id là 1
        ]);
    }
}
