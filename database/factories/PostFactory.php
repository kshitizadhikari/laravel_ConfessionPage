<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    
    public function definition()
    {
        $user = User::all();
        return [
            'title' => $this->faker->unique()->realTextBetween(5,20),
            'post' => $this->faker->unique()->realTextBetween(10,30),
            'user_id' => $user->random()->id,
            ];
    }
}