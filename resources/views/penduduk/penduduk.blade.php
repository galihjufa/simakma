@extends('layouts.navbar')

@section ('isi')

  <a href="{{url('/tambah-data')}}" class="btn btn-primary" style="margin-bottom: 5px;">Tambah Data</a>
@if (session('message'))
    <div class="alert alert-success"> {{Session::get('message')}}</div>
@endif
<div class="row">
               
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Penduduk
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover align-middle" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Provinsi</th>
                                            <th>Kabupaten</th>
                                            <th>Kecamatan</th>
                                            <th>Desa</th>
                                            <th>Pekerjaan</th>
                                            <th>Pendapatan</th>
                                            <th>Jumlah Anggota keluarga</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            @foreach ($penduduks as $pdk)
                                        <tr>
                                            <td> {{ $pdk-> id }} </td>
                                            <td> {{ $pdk-> nik }} </td>
                                            <td> {{ $pdk-> nama }} </td>
                                            <td> {{ $pdk->provinsi }} </td>
                                            <td> {{ $pdk->kabupaten }} </td>
                                            <td> {{ $pdk->kecamatan }} </td>
                                            <td> {{ $pdk->desa }} </td>
                                            <td> {{ $pdk-> pekerjaan }} </td>
                                            <td> {{ $pdk-> pendapatan }} </td>
                                            <td> {{ $pdk-> jumlah_anggota_keluarga }} </td>
                                           
                                            <td>
                                                <a class="btn btn-info" href="{{url('/penduduk/edit'.$pdk->id)}}" >Ubah</a>
                                                
                                                <a onclick="return confirm('Anda yakin akan menghapus data ini?')" href="{{url('/penduduk/delete'.$pdk->id)}}" class="btn btn-danger" >Hapus</a>
                                            </td>
                                        </tr>
                                            @endforeach

                                        
                                    </tbody>
                                
                            </div>
                        </div>
                    </div>
                </div>
</div>


@endsection
