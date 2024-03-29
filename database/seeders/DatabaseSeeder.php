<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\Genre::factory(20)->create();

        \App\Models\Artist::factory(20)->create();

        \App\Models\Album::factory(20)->create();

        \App\Models\FavoriteAlbum::factory(20)->create();
    }
}
