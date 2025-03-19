<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanHarianMesin extends Model
{
    use HasFactory;

    protected $table = 'laporan_harian_mesin';

    protected $fillable = [
        'tanggal_waktu',
        'nomor_kendaraan',
        'nama_operator',
        'jenis_kerja_1',
        'blok_kerja_1',
        'jenis_kerja_2',
        'blok_kerja_2',
        'jenis_kerja_3',
        'blok_kerja_3',
        'jenis_kerja_4',
        'blok_kerja_4',
    ];

    public $timestamps = false;
}
