<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->insert([
            'username' => 'admin',
            'password' => bcrypt('Simakma2017'),
            'nama' => 'Admin',
        ]);

        DB::table('penduduks')->insert([
    		'nik' => '16523045',
    		'nama' => 'Galih Jufa Wirahadi Laksana',
            'provinsi' => 'JAWA TENGAH',
            'kabupaten' => 'KABUPATEN MAGELANG',
            'kecamatan' => 'SRUMBUNG',
            'desa' => 'POLENGAN',
            'pekerjaan' => 'Petani',
            'pendapatan' => 'Tidak tentu',
    		'jumlah_anggota_keluarga' => '2',
    	]);

        DB::table('provinces')->insert([
            'id' => '33',
            'name' => 'JAWA TENGAH',
        ]);

        DB::table('regencies')->insert([
            'id' => '3308',
            'province_id' => '33',
            'name' => 'KABUPATEN MAGELANG',
        ]);DB::table('districts')->insert([
            'id' => '3308050',
            'regency_id' => '3308',
            'name' => 'SRUMBUNG',
        ]);DB::table('villages')->insert([
            'id' => '3308050014',
            'district_id' => '3308050',
            'name' => 'POLENGAN',
        ]);


    }

}
