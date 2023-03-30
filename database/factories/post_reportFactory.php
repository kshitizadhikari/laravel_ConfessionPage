<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Post;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\post_report>
 */
class post_reportFactory extends Factory
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
            'ruser_id' => $user->random()->id,
            'report_type' => 'spam',
            //
        ];
    }
}