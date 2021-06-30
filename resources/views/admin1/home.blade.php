@extends('layouts/admin')
@section('title','Home')
@section('container')

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-md-19">
                <h1 class="display-3" style="text-align:center">SELAMAT DATANG ADMIN</h1>
                        <p class="lead" style="text-align:center">Selamat bekerja ! Gunakan sistem ini untuk kepentingan dan kemajuan pendataan Inventaris Skripsi HMJTI AKAKOM. Selamat Bekerja dan Tetap Semangat</p>
                        <p></p>
            </div>
        </div> 
        <br>
<!-- Content Row -->
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            TOTAL SKRIPSI</div>
                        <div class="h1 mb-0 font-weight-bold text-gray-800">{{$t_skripsi}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
            <div class="col-auto">
                <a href="{{route('inventaris.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            ANGGOTA</div>
                        <div class="h1 mb-0 font-weight-bold text-gray-800">{{$jumlah_user}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-fw fa-user-plus fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
            <div class="col-auto">
            <a href="{{route('anggota.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
    </div>
</div>
    </body>
</html>

@endsection