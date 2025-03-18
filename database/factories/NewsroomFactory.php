<?php

namespace Database\Factories;

use App\Models\Newsroomcategory;
use App\Models\User;



use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Newsroom>
 */
class NewsroomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'user_id' => User::factory(),
            'category_id' => Newsroomcategory::factory(),
            'slug' => Str::slug(fake()->sentence()),
            'body' => fake()->text()
        ];
    }
}
