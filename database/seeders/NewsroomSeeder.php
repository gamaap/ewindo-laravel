<?php

namespace Database\Seeders;

use App\Models\Newsroom;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NewsroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Newsroom::create([
            'title' => '79th Indonesian Independence Day',
            'user_id' => 3,
            'category_id' => 5,
            'slug' => '79-indonesian-independence-day',
            'body' => 'On August 17, 2024, Indonesia proudly celebrates its 79th Independence Day, marking nearly eight decades of freedom since proclaiming independence in 1945. This year’s theme revolves around “Bersatu untuk Indonesia Maju” (United for an Advanced Indonesia), emphasizing the importance of unity amid diversity to achieve national progress.

                        The celebrations are marked by flag-hoisting ceremonies, traditional competitions like panjat pinang and balap karung, and cultural parades in cities and villages across the archipelago. Communities come together, reinforcing the spirit of gotong royong (mutual cooperation) that has been a core value of Indonesian society.

                        Beyond festivities, this day reminds the younger generation of the sacrifices made by national heroes. It is also a moment for reflection on how far the nation has advanced and the challenges ahead.

                        As Indonesia approaches its 80th milestone, there is a shared hope to continue building a just, prosperous, and sustainable future for all citizens.'
        ]);
        Newsroom::create([
            'title' => 'JOGJA TRIP',
            'user_id' => 2,
            'category_id' => 1,
            'slug' => 'JOGJA_TRIP_1',
            'body' => 'Pada tanggal 8-10 Maret 2025, PT Ewindo mengadakan perjalanan dinas sekaligus refreshing bertajuk "Jogja Trip PT Ewindo" yang diikuti oleh seluruh karyawan dan manajemen. Perjalanan ini bertujuan untuk mempererat kebersamaan tim, meningkatkan semangat kerja, serta memberikan apresiasi atas dedikasi seluruh anggota perusahaan. Perjalanan dimulai dari Jakarta menuju Yogyakarta dengan menggunakan kereta api. Setibanya di Jogja, rombongan langsung menuju Candi Prambanan, salah satu situs warisan dunia yang menjadi ikon sejarah dan budaya Jawa. Di sana, peserta trip disuguhi keindahan arsitektur candi yang megah serta mengikuti tur budaya yang dipandu oleh guide profesional. Hari kedua dilanjutkan dengan explore alam di kawasan Tebing Breksi dan HeHa Sky View, di mana seluruh peserta menikmati pemandangan alam Jogja dari ketinggian sambil berfoto bersama dengan latar belakang city view yang menakjubkan. Pada malam harinya, rombongan mengunjungi kawasan Malioboro untuk berbelanja oleh-oleh khas Jogja serta menikmati kuliner legendaris seperti gudeg, bakpia, dan wedang ronde. Hari ketiga ditutup dengan acara team building dan fun games di Pantai Parangtritis, yang penuh dengan canda tawa dan kekompakan. Tidak hanya sekadar wisata, kegiatan ini juga menjadi momen untuk saling mengenal lebih dalam antar karyawan dan mempererat hubungan antar divisi. Jogja Trip PT Ewindo menjadi pengalaman yang sangat berkesan dan menyenangkan bagi seluruh peserta. Selain mengisi kembali semangat kerja, perjalanan ini juga membuktikan bahwa PT Ewindo tidak hanya fokus pada produktivitas, tetapi juga pada kesejahteraan dan kebahagiaan seluruh karyawannya.'
        ]);
        Newsroom::create([
            'title' => 'PANGANDARAN TRIP',
            'user_id' => 2,
            'category_id' => 3,
            'slug' => 'PANGANDARAN_TRIP_1',
            'body' => 'Pada tanggal 8-10 Maret 2025, PT Ewindo mengadakan perjalanan dinas sekaligus refreshing bertajuk "Jogja Trip PT Ewindo" yang diikuti oleh seluruh karyawan dan manajemen. Perjalanan ini bertujuan untuk mempererat kebersamaan tim, meningkatkan semangat kerja, serta memberikan apresiasi atas dedikasi seluruh anggota perusahaan. Perjalanan dimulai dari Jakarta menuju Yogyakarta dengan menggunakan kereta api. Setibanya di Jogja, rombongan langsung menuju Candi Prambanan, salah satu situs warisan dunia yang menjadi ikon sejarah dan budaya Jawa. Di sana, peserta trip disuguhi keindahan arsitektur candi yang megah serta mengikuti tur budaya yang dipandu oleh guide profesional. Hari kedua dilanjutkan dengan explore alam di kawasan Tebing Breksi dan HeHa Sky View, di mana seluruh peserta menikmati pemandangan alam Jogja dari ketinggian sambil berfoto bersama dengan latar belakang city view yang menakjubkan. Pada malam harinya, rombongan mengunjungi kawasan Malioboro untuk berbelanja oleh-oleh khas Jogja serta menikmati kuliner legendaris seperti gudeg, bakpia, dan wedang ronde. Hari ketiga ditutup dengan acara team building dan fun games di Pantai Parangtritis, yang penuh dengan canda tawa dan kekompakan. Tidak hanya sekadar wisata, kegiatan ini juga menjadi momen untuk saling mengenal lebih dalam antar karyawan dan mempererat hubungan antar divisi. Jogja Trip PT Ewindo menjadi pengalaman yang sangat berkesan dan menyenangkan bagi seluruh peserta. Selain mengisi kembali semangat kerja, perjalanan ini juga membuktikan bahwa PT Ewindo tidak hanya fokus pada produktivitas, tetapi juga pada kesejahteraan dan kebahagiaan seluruh karyawannya.'
        ]);
        Newsroom::create([
            'title' => 'DUFAN TRIP',
            'user_id' => 2,
            'category_id' => 3,
            'slug' => 'DUFAN_TRIP_1',
            'body' => 'Pada tanggal 8-10 Maret 2025, PT Ewindo mengadakan perjalanan dinas sekaligus refreshing bertajuk "Jogja Trip PT Ewindo" yang diikuti oleh seluruh karyawan dan manajemen. Perjalanan ini bertujuan untuk mempererat kebersamaan tim, meningkatkan semangat kerja, serta memberikan apresiasi atas dedikasi seluruh anggota perusahaan. Perjalanan dimulai dari Jakarta menuju Yogyakarta dengan menggunakan kereta api. Setibanya di Jogja, rombongan langsung menuju Candi Prambanan, salah satu situs warisan dunia yang menjadi ikon sejarah dan budaya Jawa. Di sana, peserta trip disuguhi keindahan arsitektur candi yang megah serta mengikuti tur budaya yang dipandu oleh guide profesional. Hari kedua dilanjutkan dengan explore alam di kawasan Tebing Breksi dan HeHa Sky View, di mana seluruh peserta menikmati pemandangan alam Jogja dari ketinggian sambil berfoto bersama dengan latar belakang city view yang menakjubkan. Pada malam harinya, rombongan mengunjungi kawasan Malioboro untuk berbelanja oleh-oleh khas Jogja serta menikmati kuliner legendaris seperti gudeg, bakpia, dan wedang ronde. Hari ketiga ditutup dengan acara team building dan fun games di Pantai Parangtritis, yang penuh dengan canda tawa dan kekompakan. Tidak hanya sekadar wisata, kegiatan ini juga menjadi momen untuk saling mengenal lebih dalam antar karyawan dan mempererat hubungan antar divisi. Jogja Trip PT Ewindo menjadi pengalaman yang sangat berkesan dan menyenangkan bagi seluruh peserta. Selain mengisi kembali semangat kerja, perjalanan ini juga membuktikan bahwa PT Ewindo tidak hanya fokus pada produktivitas, tetapi juga pada kesejahteraan dan kebahagiaan seluruh karyawannya.'
        ]);
        Newsroom::create([
            'title' => 'TRAINING SGS SESSION 2',
            'user_id' => 2,
            'category_id' => 5,
            'slug' => 'TRAINING_SGS_SESSION2',
            'body' => 'Pada tanggal 8-10 Maret 2025, PT Ewindo mengadakan perjalanan dinas sekaligus refreshing bertajuk "Jogja Trip PT Ewindo" yang diikuti oleh seluruh karyawan dan manajemen. Perjalanan ini bertujuan untuk mempererat kebersamaan tim, meningkatkan semangat kerja, serta memberikan apresiasi atas dedikasi seluruh anggota perusahaan. Perjalanan dimulai dari Jakarta menuju Yogyakarta dengan menggunakan kereta api. Setibanya di Jogja, rombongan langsung menuju Candi Prambanan, salah satu situs warisan dunia yang menjadi ikon sejarah dan budaya Jawa. Di sana, peserta trip disuguhi keindahan arsitektur candi yang megah serta mengikuti tur budaya yang dipandu oleh guide profesional. Hari kedua dilanjutkan dengan explore alam di kawasan Tebing Breksi dan HeHa Sky View, di mana seluruh peserta menikmati pemandangan alam Jogja dari ketinggian sambil berfoto bersama dengan latar belakang city view yang menakjubkan. Pada malam harinya, rombongan mengunjungi kawasan Malioboro untuk berbelanja oleh-oleh khas Jogja serta menikmati kuliner legendaris seperti gudeg, bakpia, dan wedang ronde. Hari ketiga ditutup dengan acara team building dan fun games di Pantai Parangtritis, yang penuh dengan canda tawa dan kekompakan. Tidak hanya sekadar wisata, kegiatan ini juga menjadi momen untuk saling mengenal lebih dalam antar karyawan dan mempererat hubungan antar divisi. Jogja Trip PT Ewindo menjadi pengalaman yang sangat berkesan dan menyenangkan bagi seluruh peserta. Selain mengisi kembali semangat kerja, perjalanan ini juga membuktikan bahwa PT Ewindo tidak hanya fokus pada produktivitas, tetapi juga pada kesejahteraan dan kebahagiaan seluruh karyawannya.'
        ]);
            
      
        

    }
}
