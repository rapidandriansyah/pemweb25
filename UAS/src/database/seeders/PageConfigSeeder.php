<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PageConfig;

class PageConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        PageConfig::create([
            'title' => 'Selamat Datang Di JalanKita',
            'detail' => 'JalanKita adalah sebuah aplikasi berbasis web dan mobile yang dirancang untuk memfasilitasi partisipasi masyarakat dalam melaporkan kondisi jalan yang rusak atau membahayakan. Aplikasi ini menjadi jembatan antara warga, pihak berwenang, dan petugas lapang',
            'image' => ''
        ]);
    }
}