
@extends('layout2/appp')
@section('title','inventaris')
@section('content')
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Inventaris</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        <br><br><br><br>
        <div class="container">
            <div class=" form-row">
                <div class="col-lg-12">
                    <h3>Detail</h3>
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="nama_mahasiswa" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                <div class="col-sm-10">
                    {{$inventaris->nama_mahasiswa}}
                </div>
            </div>
            <div class="form-group row">
                <label for="judul_skripsi" class="col-sm-2 col-form-label">Judul Skripsi</label>
                <div class="col-sm-10">
                    {{$inventaris->judul_skripsi}}
                </div>
            </div>
            <div class="form-group row">
                <label for="thun_yudisium" class="col-sm-2 col-form-label">Tahun Yudisium</label>
                <div class="col-sm-10">
                    {{$inventaris->thun_yudisium}}
                </div>
            </div>
            <div class="form-group row">
                <label for="angkatan" class="col-sm-2 col-form-label">Angkatan</label>
                <div class="col-sm-10">
                    {{$inventaris->angkatan}}
                </div>
            </div>
            <div class="form-group row">
                <label for="kategori" class="col-sm-2 col-form-label">Kategori Skripsi</label>
                <div class="col-sm-10">
                    {{$inventaris->kategori}}
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-12">
                    <a href="" class="btn  btn-success">Kembali</a>
                    <a href="{{ route('downloadFile', $inventaris->file)}}" class="btn  btn-warning"><i class="fas fa-download"></i>Download file</a>
                </div>
            </div>
        
        </div>
      </body>
      	<!-- Start Contact info -->

	<!-- End Contact info -->
	
	
	<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

	<!-- ALL JS FILES -->
	<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('js/popper.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- ALL PLUGINS -->
	<script src="{{asset('js/jquery.superslides.min.js')}}"></script>
	<script src="{{asset('js/images-loded.min.js')}}"></script>
	<script src="{{asset('js/isotope.min.js')}}"></script>
	<script src="{{asset('js/baguetteBox.min.js')}}"></script>
	<script src="{{asset('js/form-validator.min.js')}}"></script>
    <script src="{{asset('js/contact-form-script.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
  </html>

 
  @endsection
