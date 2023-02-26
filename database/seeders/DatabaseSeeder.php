<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\post_like;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::factory()->times(15)->create(); 
        Post::factory()->times(15)->create();
        post_like::factory()->times(30)->create();
    }
}