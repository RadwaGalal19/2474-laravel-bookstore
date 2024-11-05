<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Author>
 */
class AuthorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $rand_sentences_count = fake()->numberBetween(1, 5);


        return [
            'name' => fake()->name(),
            'yob' => fake()->year(),
            'data' => fake()->paragraph($rand_sentences_count),
        ];
    }
}
