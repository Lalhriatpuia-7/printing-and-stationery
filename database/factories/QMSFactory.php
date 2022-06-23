<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use TCG\Voyager\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\QMS>
 */
class QMSFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'file_details' => $this->faker->sentence(),
            'category_id' => Category::all()->random()->id,
        ];
    }
}