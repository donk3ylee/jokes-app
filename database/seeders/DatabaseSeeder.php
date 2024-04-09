<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\AvailableCategory;
use App\Models\Joke;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

            // This catagories array is used to populate the AvailableCategory model with its initial values.
            // The available catagories will be added to by the end users over time when a category listed
            // here isn't available
        $categories = [
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

        foreach ($categories as $category) {
            AvailableCategory::factory()->create([
                'category' => $category,
            ]);
        }


        Joke::factory()->count(50)->create();
    }


}
