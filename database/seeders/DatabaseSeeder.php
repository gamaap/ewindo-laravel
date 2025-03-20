<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Newsroom;
use Illuminate\Database\Seeder;
use App\Models\Newsroomcategory;
use Database\Seeders\UserSeeder;
use Database\Seeders\NewsroomcategorySeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([NewsroomcategorySeeder::class, UserSeeder::class, NewsroomSeeder::class]);
        Newsroom::factory()->recycle([
            Newsroom::all(),
            Newsroomcategory::all(),
            User::all()
        ])->create();
    }
}
