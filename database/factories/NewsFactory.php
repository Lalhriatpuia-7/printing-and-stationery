<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use TCG\Voyager\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'title' => $this->faker->sentence(),
            'body' => $this->faker->paragraph(random_int(1, 10)),
            'category_id' => Category::all()->random()->id,
        ];
    }
}