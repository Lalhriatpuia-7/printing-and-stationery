<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use TCG\Voyager\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gazettes>
 */
class GazettesFactory extends Factory
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
            'body' => $this->faker->paragraph(random_int(1, 9)),
            'issue_no' => $this->faker->word(),
            'category_id' => Category::all()->random()->id,
        ];
    }
}