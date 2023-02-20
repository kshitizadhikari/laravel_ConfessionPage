<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'gender' => $this->faker->randomElement(['Male', 'Female', 'Other']),
            'age' => $this->faker->numberBetween(18, 90),
            'country' => $this->faker->randomElement(['Nepal', 'India', 'China', 'USA', 'UK', 'Austrailia']),
            'password' => Hash::make('12345678'),
            'role' => $this->faker->numberBetween(0, 1),
        ];
    }
}