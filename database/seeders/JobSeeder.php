<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Job::create([
        'job_name' => 'Web Developer',
        'slug' => 'web-developer',
        'departement_id' => 1,
        'job_type' => 'FullTime',
        'quota' => 6,
        'job_location' => 'Plant 1',
        'job_deskripsi' => 'Mengembangkan Aplikasi yang sudah ada, 
                            Melakukan TroubleShooting, 
                            Membuat Aplikasi Untuk perusahaan baik Web base maupun Desktop',
        'job_status' => 1
       ]);

       Job::create([
        'job_name' => 'Web Desainer',
        'slug' => 'web-desainer',
        'departement_id' => 1,
        'job_type' => 'FullTime',
        'quota' => 2,
        'job_location' => 'Plant 1',
        'job_deskripsi' => 'Mampu Membuat rancangan atau tampilan desain menggunakan Figma, 
                            Membuat perencanaan menggunakan diagram ERD, 
                            Membuat UI UX untuk Aplikasi Untuk perusahaan baik Web base maupun Desktop',
        'job_status' => 1
       ]);

       Job::create([
        'job_name' => 'Content Creator',
        'slug' => 'content-creator',
        'departement_id' => 1,
        'job_type' => 'FullTime',
        'quota' => 1,
        'job_location' => 'Plant 1',
        'job_deskripsi' => 'Membuat konten untuk perusahaan, 
                            Melakukan photo untuk data karyawan, 
                            Mampu bekerja dibawah tekanan',
        'job_status' => 1
       ]);

       Job::create([
        'job_name' => 'Desain Grafis',
        'slug' => 'desain-grafis',
        'departement_id' => 7,
        'job_type' => 'FullTime',
        'quota' => 1,
        'job_location' => 'Plant 2',
        'job_deskripsi' => 'Membuat desain untuk keperluan perusahaan, 
                            Melakukan desain umum',
        'job_status' => 1
       ]);

    }

}
