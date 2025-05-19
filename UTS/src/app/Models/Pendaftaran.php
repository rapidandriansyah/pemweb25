<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;
    protected $table = 'pendaftarans';
    protected $fillable = [
        'beasiswa_id',
        'nama',
        'tanggal_pendaftaran',
        'jenis_beasiswa',
        'no_telpon',
        'email'
    ];
}
