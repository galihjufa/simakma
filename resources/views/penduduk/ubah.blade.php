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
                                <option value="">{{$penduduk->provinsi}}</option>
                                @foreach ($provinces as $province)
                                    <option value="{{ $province->id }}"> {{ $province->name }}</option>   
                                @endforeach
                            </select>
                            <br>
                            <select name="kabupaten" class="form-control">
                                <option>{{$penduduk->kabupaten}}</option>
                                <option value=""></option>
                            </select>
                            <br>
                            <select name="kecamatan" class="form-control">
                                <option value="">{{$penduduk->provinsi}}</option>
                                <option value=""></option>   
                            </select>
                            <br>
                            <select name="desa" class="form-control">
                                <option value="">{{$penduduk->provinsi}}</option>
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
                    $('#kabupaten').append('<option>{{$penduduk->kabupaten}}</option>');
                    res.forEach(function(key,value){
                        $('#kabupaten').append('<option value="'+key.id+'">'+key.name+'</option>');
                    });
               
                }else{
                   $('#kabupaten').empty();
                }
               }
            });
        }else{
            $('#provinsi').append('<option>{{$penduduk->provinsi}}</option>');;
            $('#kabupaten').append('<option>{{$penduduk->kabupaten}}</option>');;
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
                    $('#kecamatan').append('<option>{{$penduduk->kecamatan}}</option>');
                    res.forEach(function(key,value){
                        $('#kecamatan').append('<option value="'+key.id+'">'+key.name+'</option>');
                    });
               
                }else{
                   $('#kecamatan').empty();
                }
               }
            });
        }else{
            $('#kabupaten').append('<option>{{$penduduk->kabupaten}}</option>');;
            $('#kecamatan').append('<option>{{$penduduk->kecamatan}}</option>');;
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
                    $('#desa').append('<option>{{$penduduk->desa}}</option>');
                    res.forEach(function(key,value){
                        $('#desa').append('<option value="'+key.id+'">'+key.name+'</option>');
                    });
               
                }else{
                   $('#desa').empty();
                }
               }
            });
        }else{
            $('#kecamatan').append('<option>{{$penduduk->kecamatan}}</option>');;
            $('#desa').append('<option>{{$penduduk->desa}}</option>');;
        }      
       });

    });
</script>

@endsection