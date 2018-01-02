@extends('layouts.navbar')

@section ('isi')

  <link rel="stylesheet" type="text/css" href="{{asset('/css/hiasan.css')}}">
  <marquee class="header"><h3>SISTEM INFORMASI MASYARAKAT KURANG MAMPU<h3></marquee>   
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>HAI, ADMIN</h2>   
                        <h5> Selamat datang di SIMAKMA </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">           
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="glyphicon glyphicon-user"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">Penduduk</p>
                    <p class="text-muted"></p>
                </div>
             </div>
             </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="glyphicon glyphicon-gift"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">Bantuan</p>
                    <p class="text-muted"></p>
                </div>
             </div>
             </div>
                    
             </div>
             </div>
            </div>
@endsection
