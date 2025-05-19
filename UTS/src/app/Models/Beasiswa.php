<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beasiswa extends Model
{
    use HasFactory;  

    protected $fillable = ['judul', 'deadline', 'kategori'];  

    // Relasi ke pendaftar  
    public function pendaftarans()  
    {  
        return $this->hasMany(Pendaftaran::class);  
    }  
}
