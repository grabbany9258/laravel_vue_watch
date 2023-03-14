<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $price = rand(100, 300);
        return [
            'name' => $this->faker->numerify('Watch Demo ###'),
            'slug' => $this->faker->slug(1),
            'description' => $this->faker->words(3, true),
            'image_name' => 'no_image.jpg',
            'price' => $price,
            'sales_price' => $price - 10,

        ];
    }
}
