<?php

namespace Database\Seeders;

use App\Models\Departement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Departement::create([
            'departement_name' => 'General Affair 1'
        ]);
        Departement::create([
            'departement_name' => 'Marketing 1'
        ]);
        Departement::create([
            'departement_name' => 'Purchasing 1'
        ]);
        Departement::create([
            'departement_name' => 'Quality Assurance 1'
        ]);
        Departement::create([
            'departement_name' => 'Produksi 1'
        ]);
        Departement::create([
            'departement_name' => 'Keuangan 1'
        ]);
        Departement::create([
            'departement_name' => 'General Affair 2'
        ]);
        Departement::create([
            'departement_name' => 'Marketing 2'
        ]);
        Departement::create([
            'departement_name' => 'Purchasing 2'
        ]);
        Departement::create([
            'departement_name' => 'Quality Assurance 2'
        ]);
        Departement::create([
            'departement_name' => 'Produksi 2'
        ]);
        Departement::create([
            'departement_name' => 'Keuangan 2'
        ]);
    }
}
