<?php

namespace Database\Seeders;

use App\Models\Beasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BeasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(Beasiswa::count()==0){
            Beasiswa::create([
                'Judul' => 'Saya Mendaftar Beasiswa S1',
                'deadline' => now(),
                'kategori' => 'S1',
            ]);
        } 
    }
}
