<?php

namespace Database\Seeders;

use App\Models\Pendaftaran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PendaftaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(Pendaftaran::count()==0){
            Pendaftaran::create([
                'beasiswa_id' => '1',
                'nama' => 'Jhon Chena',
                'tanggal_pendaftaran' => '2025-05-15',
                'jenis_beasiswa' => 'akademik',
                'no_telpon' => '089536757712',
                'email' => 'Jhon@example.com'
            ]);
        } 
    }
}
