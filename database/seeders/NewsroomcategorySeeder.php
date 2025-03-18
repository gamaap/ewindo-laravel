<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\NewsroomCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NewsroomcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NewsroomCategory::create([
            'name' => 'Exhibition',
            'slug' => 'Exhibition-1'
        ]);
        NewsroomCategory::create([
            'name' => 'Gathering',
            'slug' => 'Gathering-2'
        ]);
        NewsroomCategory::create([
            'name' => 'Training',
            'slug' => 'Training-3'
        ]);
        NewsroomCategory::create([
            'name' => 'Celebration',
            'slug' => 'Celebration-4'
        ]);
        NewsroomCategory::create([
            'name' => 'Vacation',
            'slug' => 'Vacation-5'
        ]);
        NewsroomCategory::create([
            'name' => 'Others',
            'slug' => 'Others-6'
        ]);
    }
}
