<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arsip extends Model
{
    use HasFactory;

    protected $fillable = [
        'arsipid',
        'no_arsip',
        'klasifikasi',
        'bentuk_arsip',
        'uraian',
        'kode_unit',
        'jenis_arsip',
        'ruas',
        'unit_p',
        'm_k',
        'tahun',
        'jumlah',
        's_d',
        'no_box',
        'perkembangan',
        'lokasi',
        'retensi',
        'gudang',
        'keterangan',
        'kelompok',
        'proyek',
        'indeks',
    ];
    public $timestamps = true;
}
