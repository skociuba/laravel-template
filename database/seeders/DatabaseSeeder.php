<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post; // Import the Post model
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Create 50 fake posts
        Post::factory()->count(5)->create();
    }
}
