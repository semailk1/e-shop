<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $brands = [
            'Apple',
            'Asus',
            'Lenovo',
            'Nokia',
            'LG',
            'Sony',
            'Samsung',
            'MSI',
            'HP',
            'Acer',
            'Xiaomi',
            'Honor'
        ];

        $categories = [
          'Ноутбуки',
          'Системные блоки',
          'Мониторы',
          'Телефоны',
          'Планшеты',
          'Телевизоры',
          'Тюнеры'
        ];

        foreach ($brands as  $brand){
            DB::table('brands')->insert([
                'name' => $brand
            ]);
        }

        foreach ($categories as $category){
            DB::table('categories')->insert([
                'name' => $category
            ]);
        }

        Product::factory([
            'category_id' => 1,
            'brand_id' => 1
        ])->count(160)->create();
        // \App\Models\User::factory(10)->create();

    }
}
