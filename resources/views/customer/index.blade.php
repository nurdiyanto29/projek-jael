
<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>HMJTI AKAKOM</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" type="{{asset('image/x-icon')}}">
    <link rel="apple-touch-icon" href="{{asset('images/apple-touch-icon.png')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="{{ url('/')}}">
					<img src="{{asset('images/lg1.jpg')}}" alt="Masjid Ummi Salamah"  style="width:70px;"/>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="{{ url('/')}}">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="{{url('/customer/inventaris')}}">Inventaris Skripsi</a>
							<li class="nav-item"><a class="nav-link" href="{{route('customer.about')}}">Profil</a></li>
							<li class="nav-item"><a class="nav-link" href="{{route('customer.visi')}}">Visi Misi</a></li>  
						<li class="nav-item"><a class="nav-link" href="{{route('login')}}">Login</a></li>
						<li class="nav-item"><a class="nav-link" href="{{route('logout')}}">Logout</a></li>
					 
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	
	<!-- Start slides -->
	<div id="slides" class="cover-slides">
		<ul class="slides-container">
			<li class="text-center">
				<img src="{{asset('images/22.jpg')}}">	
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>INVENTARIS SKRIPSI HMJTI AKAKOM</strong></h1>
							<p class="m-b-40"></p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-center">
				<img src="{{asset('images/11.jpg')}}" style="width:200px;">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>INVENTARIS SKRIPSI HMJTI AKAKOM</strong></h1>
							<p class="m-b-40"></p>	
						</div>
					</div>
				</div>
			</li>
			<li class="text-center">
				<img src="{{asset('images/44.jpg')}}" style="width:200px;">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>INVENTARIS SKRIPSI HMJTI AKAKOM</strong></h1>
							<p class="m-b-40"></p>	
						</div>
					</div>
				</div>
			</li>
		</ul>
		<div class="slides-navigation">
			<a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
			<a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
		</div>
	</div>
	<!-- End slides -->
	
	<!-- Start About -->
	<div class="about-section-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<img src="{{asset('images/33.jpg')}}" alt="" class="img-fluid">
					<style type="text/css">
						img {
							width: 500px;
						}
					 </style>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 text-center">
					<div class="inner-column">
						<h1>Sejarah<span> HMJTI AKAKOM</span></h1>
						<h3>YOGYAKARTA</h3>
						<p>Berawal dari hasil diskusi yang dilakukan oleh beberapa orang, muncul suatu ide untuk mendirikan lembaga ini. Ide ini muncul karena dililhat bahwa selama ini jurusan Teknik Informatika STMIK AKAKOM Yogyakarta yang mempunyai jumlah peminat terbanyak dibandingkan jurusan yang lainnya belum memiliki himpunan mahasiswa jurusan. Sebelumnya memang sempat didirikan sebuah organisasi yang merupakan organisasi himpunan mahasiswa jurusan teknik informatika, tetapi seiring berjalannya waktu organisasi tersebut tidak aktif.
						
							 </p>

						<p>	Beberapa saat kemudian, sekitar tahun 2003 sempat juga didirikan Himpunan Mahasiswa Jurusan Teknik Informtika, tetapi karena perbedaan pandangan, kepentigan dan terdapatnya beberapa pertimbangan, organisasi tersebut tidak dapat disahkan oleh Keluarga Mahasiswa, sehingga organisasi ini tidak dapat berdiri. Dengan melihat permasalahan-permasalahan yang telah terjadi, dan mengingat selama ini jurusan Teknik Informatika STMIK AKAKOM Yogyakarta yang mempunyai jumlah peminat terbanyak dibandingkan jurusan yang lainnya belum memiliki himpunan mahasiswa jurusan, maka beberapa orang mahasiswa jurusan teknik informatika mengadakan diskusi dan saling bertukar pikiran untuk mendirikan lembaga ini.</p>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End About -->
	
	<!-- Start QT -->
	<div class="qt-box qt-background">
		<div class="container">
			<div class="row">
				<div class="col-md-15 ml-auto mr-auto text-center">
					<p>
						“Para pemimpin yang bekerja paling efektif, menurut saya, tidak pernah mengatakan ‘aku’ Dan itu bukan karena mereka telah melatih diri untuk tidak mengatakan ‘aku’ Mereka tidak berpikir ‘aku’ Mereka berpikir ‘kami’; ‘tim. “Mereka berpikir Mereka memahami pekerjaan mereka untuk membuat fungsi tim. Mereka menerima tanggung jawab dan tidak menghindari, tapi ‘kita’ mendapat penghargaan …. Inilah yang menciptakan kepercayaan, apa yang memungkinkan Anda untuk mendapatkan tugas yang dilakukan.
						”	
					</p>
					<span class="lead">–Peter Drucker-</span>
				</div>
			</div>
		</div>
	</div>

	<footer class="footer-area bg-f">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<h3>Alamat</h3>
					<p class="lead">Jl.Raya Janti No 143 Karang Jambe, Yogyakarta</p> 
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Tlp</h3>
					<p class="lead">+6285828377000</p> 
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Email</h3>
					<p><a href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcSDZPQtPQhqvhgJRfxStZgsfpZglLwwBxRwPbjvNLtgBFjrjbKXDhPXSsGkSZsmLrJgkqNvZ"> hmjti.stmikakakom@gmail.com</a></p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Sosial Media HMJ TI</h3>
					<div class="subscribe_form">
					</div>
					<ul class="list-inline f-social">
						<li class="list-inline-item"><a href="https://web.facebook.com/hmjtiakakom?_rdc=1&_rdr"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="https://twitter.com/hmjti_akakom"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="https://instagram.com/hmjti_akakom/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="company-name">INVENTAIS SKRIPSI &copy; 2021 <a href="#">HMJTI AKAKOM</a> 

					</div>
				</div>
			</div>
		</div>
		
	</footer>
	
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