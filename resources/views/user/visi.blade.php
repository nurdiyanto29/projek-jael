@extends('layout2/appp')
@section('title','Visi Misi')
@section('content')
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Visi Misi</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        <br><br><br>
        <div class="about-section-box">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <img src="{{asset('images/xx.jpg')}}" alt="" class="img-fluid">
                        <style type="text/css">
                            img {
                                width: 500px;
                            }
                         </style>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                        <div class="inner-column">
                            <h1>VISI<span></span></h1>
                            <h3></h3>
                            <p>Himpunan Mahasiswa Jurusan Teknik Informatika STMIK AKAKOM Yogyakarta mengemban visi utama, yaitu sebagai wadah untuk menyatukan mahasiswa jurusan Teknik Informatika dalam menunjang proses akademis dan non akademis.
                            </p>
                        </div>
                        <div class="inner-column">
                            <h1><span>MISI</span></h1>
                            <h3></h3>
                            <p>Mengembangkan kepribadian, skill, kreativitas dan pengetahuan.
                                Berfungsi sebagai fasilitator dan sumber wacana untuk memperluas wawasan di bidang teknologi informasi.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

	
	
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