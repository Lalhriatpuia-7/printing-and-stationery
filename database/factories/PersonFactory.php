<?php

namespace Database\Factories;

use App\Models\designation;
use App\Models\PersonType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Person>
 */
class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'name' => $this->faker->name(),
            'address' => $this->faker->address(),
            'contact_no' => $this->faker->phoneNumber(),
            'alternate_contact_no' => $this->faker->phoneNumber(),
            'email' => $this->faker->email(),
            'designation_id' => designation::all()->random()->id,
            'person_type_id' => PersonType::all()->random()->id,
        ];
    }
}