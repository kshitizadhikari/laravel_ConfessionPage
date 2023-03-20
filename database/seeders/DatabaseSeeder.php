<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Contact;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\post_like;
use App\Models\post_report;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::factory()->times(30)->create(); 
        Post::factory()->times(50)->create();
        post_like::factory()->times(30)->create();
        post_report::factory()->times(30)->create();
        Contact::factory()->times(7)->create();
    }
}