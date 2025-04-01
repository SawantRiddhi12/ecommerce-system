<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Hairs and salon',
                'description' => 'Hairs and salon products'
            ],
            [
                'name' => 'Clothes',
                'description' => 'Clothing and wear products'
            ],
            [
                'name' => 'Beauty',
                'description' => 'Beauty products'
            ]
        ];

        Category::insert($data);
    }
}
