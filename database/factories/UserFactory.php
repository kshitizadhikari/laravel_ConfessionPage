<?php

namespace Database\Factories;

use App\Models\post_report;
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
       $randomimg=[
        'pp/pp-1.png',
        'pp/pp-2.png',
        'pp/pp-3.png',
        'pp/pp-4.png',
        'pp/pp-5.png',
        'pp/pp-6.png',
        'pp/pp-7.png',
        'pp/pp-8.png',
        'pp/pp-9.png',
        'pp/pp-10.png',
        'pp/pp-11.png',
        'pp/pp-12.png',
        'pp/pp-13.png',
        'pp/pp-14.png',
        'pp/pp-15.png',
        'pp/pp-16.png',
        'pp/pp-17.png',
        'pp/pp-18.png',
        'pp/pp-19.png',
        'pp/pp-20.png',
        'pp/pp-21.png',
        'pp/pp-22.png',
        'pp/pp-23.png',
        'pp/pp-24.png',
        'pp/pp-25.png',
        'pp/pp-26.png',
        'pp/pp-27.png',
        'pp/pp-28.png',
        'pp/pp-29.png',
        'pp/pp-30.png'
       ];

       
        return [
            'name' => $this->faker->unique()->name(),
            'username' => $this->faker->unique()->text(13),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => Hash::make('12345678'),
            'gender' => $this->faker->randomElement(['Male', 'Female', 'Other']),
            'age' => $this->faker->numberBetween(18, 90),
            'country' => $this->faker->randomElement(['Nepal', 'India', 'China', 'USA', 'UK', 'Austrailia']),
            'img' =>$randomimg[rand(0,29)],
            'role' => $this->faker->numberBetween(0, 1),
        ];
    }
}