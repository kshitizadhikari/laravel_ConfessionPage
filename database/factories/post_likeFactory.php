<?php

namespace Database\Factories;
use App\Models\User;
use App\Models\Post;


use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\post_like>
 */
class post_likeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $user = User::all();
        $post = Post::all();
        return [
            'user_id' => $user->random()->id,
            'post_id' => $post->random()->id,
            //
        ];
    }
}