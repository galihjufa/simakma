<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Penduduk extends Model
{
    protected $fillable = [
        'nik', 'nama','provinsi','kabupaten','kecamatan','desa', 'pekerjaan', 'pendapatan', 'jumlah_anggota_keluarga'
    ];
}
