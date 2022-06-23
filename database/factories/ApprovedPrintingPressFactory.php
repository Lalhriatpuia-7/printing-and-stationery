<?php

namespace Database\Factories;

use App\Models\Person;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ApprovedPrintingPress>
 */
class ApprovedPrintingPressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'printing_press_name' => $this->faker->word(),
            'person_id' => Person::all()->random()->id,
            'press_address' => $this->faker->address(),
        ];
    }
}