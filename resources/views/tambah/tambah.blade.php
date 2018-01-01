@extends('layouts.navbar')

@section ('isi')
                                                        @if ($errors->any())
                                                            <div class="alert alert-danger">
                                                                <ul>
                                                                    @foreach ($errors->all() as $error)
                                                                        <li>{{ $error }}</li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        @endif
<div class="panel panel-default">
    <div class="panel-heading">
        Tambah Data
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <form method="POST" action="{{url('/penduduk/buat')}}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>NIK</label>
                        <input class="form-control" name="nik" type="integer" />
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input class="form-control" name="nama" type="text" />
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                            <select name="provinsi" id="provinsi" class="form-control">
                                <option value="">--Pilih Provinsi--</option>
                                @foreach ($provinces as $province)
                                    <option value="{{ $province->id }}"> {{ $province->name }}</option>   
                                @endforeach
                            </select>
                            <br>

                            <select name="kabupaten" id="kabupaten" class="form-control">
                                 <option value="">--Pilih Kabupaten--</option>
                            </select>
                            <br>
                            <select name="kecamatan" id="kecamatan" class="form-control">
                                <option value="">--Pilih Kecamatan--</option>
                                
                            </select>
                            <br>
                            <select name="desa" id="desa" class="form-control">
                                <option value="">--Pilih Desa--</option>
                                
                            </select>
                    </div>
                    <div class="form-group">
                        <label>Pekerjaan</label>
                        <input class="form-control" name="pekerjaan" type="text" />
                    </div>
                    <div class="form-group">
                        <label>Pendapatan</label>
                        <select class="form-control" name="pendapatan" type="text">
                            <option value="< Rp 500.000">< Rp 500.000</option>
                            <option value="Rp 500.000 - Rp 1.500.000">Rp 500.000 - Rp 1.500.000</option>
                            <option value="> Rp 1.500.000">> Rp 1.500.000</option>
                            <option value="Tidak tentu">Tidak tentu</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Jumlah Anggota Keluarga</label>
                        <input class="form-control" name="jumlah_anggota_keluarga" type="integer" />
                    </div>
                    <div>
                        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    // provinsi
    $(document).ready(function() {
        $('#provinsi').change(function(){
        var provID = $(this).val();    
        if(provID){

            $.ajax({
               type:"GET",
               url:"{{url('/regency/get')}}/"+provID,
               success:function(res){               
                if(res){
                    $('#kabupaten').empty();
                    $('#kabupaten').append('<option>--Pilih Kabupaten--</option>');
                    res.forEach(function(key,value){
                        $('#kabupaten').append('<option value="'+key.id+'">'+key.name+'</option>');
                    });
               
                }else{
                   $('#kabupaten').empty();
                }
               }
            });
        }else{
            $('#provinsi').append('<option>--Pilih Provinsi--</option>');;
            $('#kabupaten').append('<option>--Pilih Kabupaten--</option>');;
        }      
       });
        // Kabupaten
        $('#kabupaten').change(function(){
        var kabID = $(this).val();    
        if(kabID){

            $.ajax({
               type:"GET",
               url:"{{url('/district/get')}}/"+kabID,
               success:function(res){               
                if(res){
                    $('#kecamatan').empty();
                    $('#kecamatan').append('<option>--Pilih Kecamatan--</option>');
                    res.forEach(function(key,value){
                        $('#kecamatan').append('<option value="'+key.id+'">'+key.name+'</option>');
                    });
               
                }else{
                   $('#kecamatan').empty();
                }
               }
            });
        }else{
            $('#kabupaten').append('<option>--Pilih Kabupaten--</option>');;
            $('#kecamatan').append('<option>--Pilih Kecamatan--</option>');;
        }      
       });
        // Kecamatan
        $('#kecamatan').change(function(){
        var kecID = $(this).val();    
        if(kecID){

            $.ajax({
               type:"GET",
               url:"{{url('/village/get')}}/"+kecID,
               success:function(res){               
                if(res){
                    $('#desa').empty();
                    $('#desa').append('<option>--Pilih Desa--</option>');
                    res.forEach(function(key,value){
                        $('#desa').append('<option value="'+key.id+'">'+key.name+'</option>');
                    });
               
                }else{
                   $('#desa').empty();
                }
               }
            });
        }else{
            $('#kecamatan').append('<option>--Pilih Kecamatan--</option>');;
            $('#desa').append('<option>--Pilih Desa--</option>');;
        }      
       });

    });
</script>

@endsection
