<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use TCG\Voyager\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StationeryItem>
 */
class StationeryItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'item_id' => $this->faker->numberBetween(0, 9999),
            'category_id' => Category::all()->random()->id,
        ];
    }
}