<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->title,
            'price' => rand(1,100),
            'article' => rand(1000, 1000000),
            'images' => [0 => 'img/6233.png', 1 => 'img/6233b.jpeg'],
            'description' => $this->faker->text,
            'purchase_price' => rand(1,100),
            'discount' => rand(1,100),
            'rating' => rand(1, 5),
            'quantity' => rand(1, 100)
        ];
    }
}
