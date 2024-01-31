<?php

namespace Database\Factories;

use App\Models\Artist;
use App\Models\Genre;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Album>
 */
class AlbumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            "name" => $this->faker->name,
            "description" => $this->faker->paragraph,
            "image" => $this->faker->imageUrl,
            "artist_id" => Artist::find(rand(1, 20)),
            "genre_id" => Genre::find(rand(1, 10)),
        ];
    }
}
