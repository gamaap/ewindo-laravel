<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Applicant;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ApplicantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Applicant::create([
            'nik' => '32109201920292',
            'job_id' => 1,
            'nama' => 'Apris Agung Wiresa',
            'jenis_kelamin' => 'Laki-laki',
            'nohp' => '083820385357',
            'email' => 'Aprisagung@gmail.com',
            'tanggal_lahir' => Carbon::createFromFormat('d/m/Y', '21/04/1998')->toDateString(),
            'status_menikah' => 'Belum Menikah',
            'status' => 'pending',
            'country' => 'Indonesia'
        ]);
        Applicant::create([
            'nik' => '321092019839393',
            'job_id' => 2,
            'nama' => 'Cindy Y',
            'jenis_kelamin' => 'Perempuan',
            'nohp' => '083820385371',
            'email' => 'cindviad@gmail.com',
            'tanggal_lahir' => Carbon::createFromFormat('d/m/Y', '14/01/1998')->toDateString(),
            'status_menikah' => 'Menikah',
            'status' => 'pending',
            'country' => 'Indonesia'
        ]);
        Applicant::create([
            'nik' => '321092013239393',
            'job_id' => 3,
            'nama' => 'Apriyani',
            'jenis_kelamin' => 'Perempuan',
            'nohp' => '083820382332',
            'email' => 'apry@gmail.com',
            'tanggal_lahir' => Carbon::createFromFormat('d/m/Y', '14/03/1998')->toDateString(),
            'status_menikah' => 'Belum Menikah',
            'status' => 'pending',
            'country' => 'Indonesia'
        ]);
        Applicant::create([
            'nik' => '321092019783737373',
            'job_id' => 1,
            'nama' => 'Agung',
            'jenis_kelamin' => 'Laki-laki',
            'nohp' => '083820323222',
            'email' => 'agungboncel@gmail.com',
            'tanggal_lahir' => Carbon::createFromFormat('d/m/Y', '14/01/1998')->toDateString(),
            'status_menikah' => 'Menikah',
            'status' => 'Accepted',
            'country' => 'Indonesia'
        ]);
    }
}
