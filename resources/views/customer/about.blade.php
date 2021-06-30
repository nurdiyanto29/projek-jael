@extends('layout2/app')
@section('title','kegiatan')
@section('content')
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>About</title>
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
                            <h1>PROFIL<span> HMJTI</span></h1>
                            <h3></h3>
                            <p>Perkembangan teknologi informasi melaju seiring perkembangan zaman. Dengan maraknya perkembangan tersebut, kebutuhan ilmu ini pun akan semakin meningkat. Teknik Informatika sebagai salah satu jurusan di STMIK AKAKOM Yogyakarta yang berkonsentrasi dalam bidang teknologi informasi dituntut untuk mampu mengikuti dan mampu mengembangkan trend di bidang tersebut. Untuk merealisasikan visi dan misi maka diperlukan suatu wadah yang merupakan bentuk kristalisasi kesamaan dasar pemikiran dan aspirasi mahasiswa khususnya jurusan Teknik Informatika, yakni Himpunan Mahasiswa Jurusan Teknik Informatika. Dengan dibentuknya Himpunan Mahasiswa Jurusan Teknik Informatika diharapkan menjadi modal untuk menentukan sasaran dibidang teknologi informasi dan menjadi bekal untuk bersaing di dunia kerja sehingga dapat memenuhi tuntutan zaman di bidang teknologi informasi.
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