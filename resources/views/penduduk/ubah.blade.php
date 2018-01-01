@extends('layouts.navbar')

@section ('isi')


<div class="panel panel-default">
    @if (session('message'))
        <div class="alert alert-success"> {{Session::get('message')}}</div>
    @endif
    <div class="panel-heading">
        Ubah Data
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                @foreach ($penduduks as $penduduk)
                <form method="POST" action="{{url('penduduk/edit'.$penduduk->id)}}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>NIK</label>
                        <input id="nik" class="form-control" name="nik" type="integer" value="{{$penduduk->nik}}"/>
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input id="nama" class="form-control" name="nama" type="text" value="{{$penduduk->nama}}"/>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <select name="provinsi" class="form-control">
                                <option value="">--Pilih Provinsi--</option>
                                <option value=""></option> 
                            </select>
                            <br>
                            <select name="kabupaten" class="form-control">
                                <option>--Pilih Kabupaten--</option>
                                <option value=""></option>
                            </select>
                            <br>
                            <select name="kecamatan" class="form-control">
                                <option value="">--Pilih Kecamatan--</option>
                                <option value=""></option>   
                            </select>
                            <br>
                            <select name="desa" class="form-control">
                                <option value="">--Pilih Desa--</option>
                                <option value=""></option>   
                            </select>
                    </div>
                    <div class="form-group">
                        <label>Pekerjaan</label>
                        <input id="pekerjaan" class="form-control" name="pekerjaan" type="text" value="{{$penduduk->pekerjaan}}"/>
                    </div>
                    <div class="form-group">
                        <label>Pendapatan</label>
                        <select id="pendapatan" class="form-control" name="pendapatan" type="enum">
                            <option value="< Rp 500.000" <?php if (($penduduk->pendapatan) == '< Rp 500.000') {echo "selected";} ?>>< Rp 500.000</option>
                            <option value="Rp 500.000 - Rp 1.500.000" <?php if (($penduduk->pendapatan) == 'Rp 500.000 - Rp 1.500.000') {echo "selected";} ?>>Rp 500.000 - Rp 1.500.000</option>
                            <option value="> Rp 1.500.000" <?php if (($penduduk->pendapatan) == '> Rp 1.500.000') {echo "selected";} ?>>> Rp 1.500.000</option>
                            <option value="Tidak tentu" <?php if (($penduduk->pendapatan) == 'Tidak tentu') {echo "selected";} ?>>Tidak tentu</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Jumlah Anggota Keluarga</label>
                        <input id="jumlah_anggota_keluarga" class="form-control" name="jumlah_anggota_keluarga" type="integer" value="{{$penduduk->jumlah_anggota_keluarga}}"/>
                    </div>
                    <div>
                        <input type="submit" name="simpan" value="PUT" class="btn btn-primary">
                    </div>
                </form>
                @endforeach

            </div>
        </div>
    </div>
</div>
@endsection