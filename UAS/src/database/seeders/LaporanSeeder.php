<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Laporan;

class LaporanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Laporan::create([
            'judul' => 'Jalan Berlubang di Perempatan',
            'description' => 'Terdapat jalan berlubang yang cukup besar di perempatan utama.',
            'kategori' => 'berlubang',
            'lokasi' => 'Jl. Sudirman No. 45',
            'foto' => '',
            'status' => 'biasa',
        ]);
    }
}
