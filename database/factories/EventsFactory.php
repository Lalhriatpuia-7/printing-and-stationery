<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use TCG\Voyager\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Events>
 */
class EventsFactory extends Factory
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
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
            'category_id' => Category::all()->random()->id,
        ];
    }
}