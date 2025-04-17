<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\User;
use App\Models\Skill;
use App\Models\Newsroom;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\AlamatKtp;
use App\Models\Applicant;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Departement;
use App\Models\AlamatDomisili;
use Database\Seeders\JobSeeder;
use Illuminate\Database\Seeder;
use App\Models\Newsroomcategory;
use Database\Seeders\UserSeeder;
use Database\Seeders\SkillSeeder;
use Database\Seeders\AlamatKtpSeeder;
use Database\Seeders\ApplicantSeeder;
use Database\Seeders\EducationSeeder;
use Database\Seeders\ExperienceSeeder;
use Database\Seeders\DepartementSeeder;
use Database\Seeders\AlamatDomisiliSeeder;
use Database\Seeders\NewsroomcategorySeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([NewsroomcategorySeeder::class, UserSeeder::class, NewsroomSeeder::class, DepartementSeeder::class, JobSeeder::class, ApplicantSeeder::class, EducationSeeder::class, AlamatKtpSeeder::class, AlamatDomisiliSeeder::class, ExperienceSeeder::class, SkillSeeder::class]);
        Newsroom::factory()->recycle([
            Newsroom::all(),
            Newsroomcategory::all(),
            Departement::all(),
            User::all(),
            Job::all(),
            Applicant::all(),
            Education::all(),
            AlamatKtp::all(),
            AlamatDomisili::all(),
            Experience::all(),
            Skill::all()
        ])->create();
    }
}
