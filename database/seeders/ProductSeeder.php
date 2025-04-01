<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $data = [
            [
                'name' => 'Loreal Serum',
                'description' => 'Serum for hair',
                'price' => 100,
                'quantity' => 10,
                'category_id' => 1
            ],
            [
                'name' => 'Arrow Shirt',
                'description' => 'Clothing product',
                'price' => 100,
                'quantity' => 10,
                'category_id' => 2
            ],
            [
                'name' => 'Beauty',
                'description' => 'Beauty product',
                'price' => 100,
                'quantity' => 10,
                'category_id' => 3
            ]
        ];

        Product::insert($data);
    }
}
