<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Information>
 */
class InformationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'avatar' => 'https://cdn-icons-png.flaticon.com/512/666/666201.png',
            'first_name' => $this->faker->firstName(),
            'middle_name' => '',
            'last_name' => $this->faker->lastName(),
            'email' => $this->faker->email(),
            'gender' => rand(1,2),
            'contact_number' => 9178781045,
            'barangay' => $this->faker->streetName(),
            'municipality' => $this->faker->streetAddress(),
            'province' => $this->faker->address(),
        ];
    }
}
