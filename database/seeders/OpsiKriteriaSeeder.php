<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OpsiKriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('opsi_kriterias')->insert([
            ['opsi' => 'Muda', 'nilai' => 1, 'id_kriteria' => 1],
            ['opsi' => 'Ideal', 'nilai' => 5, 'id_kriteria' => 1],
            ['opsi' => 'Tua', 'nilai' => 3, 'id_kriteria' => 1],
            ['opsi' => 'Kurang', 'nilai' => 1, 'id_kriteria' => 2],
            ['opsi' => 'Ideal', 'nilai' => 3, 'id_kriteria' => 2],
            ['opsi' => 'Lebih', 'nilai' => 5, 'id_kriteria' => 2],
            ['opsi' => 'Sehat', 'nilai' => 5, 'id_kriteria' => 3],
            ['opsi' => 'Sakit ringan', 'nilai' => 3, 'id_kriteria' => 3],
            ['opsi' => 'Rutin', 'nilai' => 5, 'id_kriteria' => 4],
            ['opsi' => 'Cukup rutin', 'nilai' => 3, 'id_kriteria' => 4],
            ['opsi' => 'Jarang', 'nilai' => 1, 'id_kriteria' => 4],
            ['opsi' => 'Bersih', 'nilai' => 5, 'id_kriteria' => 5],
            ['opsi' => 'Cukup bersih', 'nilai' => 3, 'id_kriteria' => 5],
            ['opsi' => 'Tunai & Non-tunai', 'nilai' => 5, 'id_kriteria' => 6],
            ['opsi' => 'Hanya Tunai / Non-tunai', 'nilai' => 3, 'id_kriteria' => 6],
            ['opsi' => 'Sesuai anggaran', 'nilai' => 1, 'id_kriteria' => 7],
            ['opsi' => 'Sedikit melebihi anggaran', 'nilai' => 3, 'id_kriteria' => 7],
            ['opsi' => 'Jauh melebihi anggaran', 'nilai' => 5, 'id_kriteria' => 7],
        ]);
    }
}
