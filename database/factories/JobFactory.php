<?php

namespace Database\Factories;

use App\Models\Departement;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'job_name' => fake()->randomElement(['Web Developer', 'Web Design', 'HR Assisten', 'Satpam', 'Desain Grafis', 'Purchasing']),
            'slug' => Str::slug(fake()->sentence()),
            'job_type' => fake()->randomElement(['Full-time', 'Part-time', 'Internship', 'Shift']),
            'departement_id' => Departement::factory(),
            'quota' => fake()->numberBetween(1, 20),
            'job_location' => fake()->randomElement(['Plant 1', 'Plant 2']),
            'job_deskripsi' => fake()->text(),
            'job_status' => fake()->boolean()
        ];
    }
}
