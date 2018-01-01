<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenduduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penduduks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nik');
            $table->string('nama');
            $table->string('provinsi',255);
            $table->string('kabupaten',255);
            $table->string('kecamatan',255);
            $table->string('desa',255);
            $table->string('pekerjaan');
            $table->enum('pendapatan', ['< Rp 500.000','Rp 500.000 - Rp 1.500.000','> Rp 1.500.000','Tidak tentu']);
            $table->integer('jumlah_anggota_keluarga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penduduks');
    }
}
