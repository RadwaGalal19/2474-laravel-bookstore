<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Language;
use App\Models\Topic;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $rand_language_id = Language::all()->random()->id;
        $rand_author_id = Author::all()->random()->id;
        $rand_topic_id = Topic::all()->random()->id;

        return [
            'title' => fake()->text(100),
            'language_id' => $rand_language_id,
            'author_id' => $rand_author_id,
            'topic_id' => $rand_topic_id,
        ];
    }
}
