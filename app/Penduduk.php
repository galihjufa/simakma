<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Province;
use App\Regency;
use App\District;
use App\Village;

class Penduduk extends Model
{
    protected $fillable = [
        'nik', 'nama','provinsi','kabupaten','kecamatan','desa', 'pekerjaan', 'pendapatan', 'jumlah_anggota_keluarga',
    ];

    public function provinsi()
    {
    	return $this->hasOne(Province::class, 'id', 'provinsi');
    }
	public function kabupaten()
    {
    	return $this->hasOne(Regency::class, 'id', 'kabupaten');
    }
	public function kecamatan()
    {
    	return $this->hasOne(District::class, 'id', 'kecamatan');
    }
	public function desa()
    {
    	return $this->hasOne(Village::class, 'id', 'desa');
    }
}
