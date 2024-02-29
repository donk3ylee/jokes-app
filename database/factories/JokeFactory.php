<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Joke>
 */
class JokeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $catagories = [
            'general',
            'knock knock',
            'dirty',
            'black comedy',
            'yo mama',
            'bar',
            'blonde',
            'cruel',
            'one liner',
            'practical',
            'satirical',
            'three wishes',
            'toilet',
        ];

        return [
            //
            'title' => fake()->name(),
            'joke' => fake()->paragraph(),
            'punchline' => fake()->sentence(),
            'category' => $catagories[rand(0, count($catagories)-1)],
            // 'graphics' => fake()->,
            'author_name' => fake()->name(),
            'author_link' => fake()->sentence(),
            // 'author_photo' => fake()->url(),
        ];
    }
}
