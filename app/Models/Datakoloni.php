<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datakoloni extends Model
{
    use HasFactory;
    protected $fillable =[
        'jenisLebah',
        'tanggalPengadaan',
        'gambar',
        'riwayatPanen',
        'catatanKesehatan'
    ];
}
