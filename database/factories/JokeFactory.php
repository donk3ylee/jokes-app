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
            'title' => fake()->sentence(8, true),
            'joke' => fake()->paragraph(8,true),
            'punchline' => fake()->sentances(4, true),
            'category' => $catagories[rand(0, count($catagories)-1)],
            'graphics' => fake()->imageUrl(1200, 460, 'stage', true, 'comedy'),
            'author_name' => fake()->name(),
            'author_link' => fake()->url(),
            'author_photo' => fake()->imageUrl(360, 360, 'people', true, 'author'),
        ];
    }
}
