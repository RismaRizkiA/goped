<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JualSampah extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis_sampah',
        'lokasi_pengambilan',
        'waktu_pengambilan',
    ];
}
