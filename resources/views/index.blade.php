<!DOCTYPE html>
<html>
<head>
	<title> Jepret</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	<link rel="stylesheet" type="text/css" href="/css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="/css/owl.theme.default.min.css">
</head>
<body>

<div id="loader"></div>
<div style="display:none;" id="myDiv">
	<div class="wrap">
		<nav class="navbar navbar-fixed-top">
		  	<div class="container-fluid">
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span> 
			      </button>    
			    </div>
			    <div class="collapse navbar-collapse" id="myNavbar">
				    <div class="brand-centered">
				    	<a class="navbar-brand" href="#"><img src="/uploads/{{$view->logo_img}}" class="logo load"></a>
				    </div>	
				      <ul class="nav navbar-nav main nav-left">
				        <li class="active"><a href="#">Home</a></li>
				        <li><a href="#">Package </a></li>
				        <li><a href="#">Gallery</a></li> 
				      </ul>
				       <ul class="nav navbar-nav main nav-right" >
				        <li><a href="#">Blog</a></li> 
				        <li><a href="#">Contact Us</a></li> 
				      </ul>
				</div>
		 	</div>
		</nav>
		<div id="mycarousel" class="carousel slide" data-ride="carousel">
		  	<ol class="carousel-indicators">
		   		 <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
		  	</ol>
		  	<div class="carousel-inner" role="listbox">
			   	<div class="item">
			    	<img src="img/1.jpg" data-color="lightblue" alt="First Image" class="load">
			    </div>
		     	<div class="item">
			    	<img src="img/2.jpeg" data-color="lightblue" alt="First Image" class="load">
			    </div>
			    <div class="item">
			       <img src="img/3.jpeg" data-color="lightblue" alt="First Image" class="load">
			    </div>
			    <div class="text">
					<p class="animasi pertama">{{ $view->title_page }}</p>
					<p class="animasi kedua"> {{ $view->jumbotron }}</p>
				</div>
			</div>
		</div>
		<div class="col-md-6 intro">
			{{ $view->description }}
		</div>
		<div class="col-md-12 paket">
				<h3 class="title-paket">~Pilihan Paket~ </h3>
				<div class="col-md-2 col-sm-12 navigasi-paket" >
					<a  href="#" class="nav-kanan">
					      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				    </a>
				    <div class="info-paket">
						<h2>Paket Pernikahan</h2>
						<p>Paket Yang tersedia disini sudah termasuk semuanya </p>
					</div>
					 <a href="#" class="nav-kiri">
					      <span class="glyphicon glyphicon-chevron-left " aria-hidden="true"></span>
					      <span class="sr-only">Next</span>
			    	 </a>
				</div>
				<div class="col-md-10 col-sm-12 back-paket">  
					<div id="owl-demo"  class="owl-carousel owl-theme owl-loaded owl-drag">
						@foreach ($pakets as $paket)
								<div class="item">
						    		<a href="/paket/{{ $paket->name }}" class="clickarea"></a>
						    		<img src="/uploads/{{$paket->featured_img}}" class="img-paket alignlefts" class="load">
						    		<div class="description">
							    		<p>{{$paket->name }}</p>
							    		<p>{{$paket->price }}</p>
						    		</div>
						    	</div>
						@endforeach
					</div>
				</div>
		</div>
	</div>
	<div class="col-md-12 gallery">
	<h3 class="title-gallery">~Gallery~ </h3>
	<div class="container">
		<div class="row row-centered">
			@for ($i = 1; $i < 6; $i++)
				<div class="col-md-3 col-sm-4 col-centered">

				</div>
			@endfor
		</div>
	</div>
</div>
	<div class="col-md-10 contact">
		<h3 class="title-gallery"> ~ Contact Us ~ </h3>
		<div class="col-md-6 col-sm-12">
			<div class="row">
				<form action="#" method="post" class="column_center">
					<input type="text" name="nama-depan-contact" placeholder="Nama Depan" class="input-contact">
					<input type="text" name="nama-belakang-contact" placeholder="Nama Belakang" class="input-contact">
					<input type="email" name="email-contact" placeholder="Email" class="input-contact">
					<textarea class="input-contact" placeholder="Pesan Anda" rows="6"></textarea>
					<input type="submit" name="submit" value="Contact" class="submit-contact">
				</form>
			</div>
		</div>
		<div class="col-md-6 col-sm-12">
			<img src="img/contact.jpg" class="img-contact" class="load">
		</div>
	</div>
	<div class="col-md-12 footer">
		<div class="row">
			<div class="col-sm-2">
				<ul>
					<li><a href="#">Home</a> </li>
					<li><a href="#">Gallery</a></li>
					<li><a href="#">Package</a></li>
					<li> <a href="#">Blog</a></li>
				</ul>
			</div>
			<div class="col-sm-2">
				<ul>
					<li><a href="{{ $view->fb_link }}" target="_blank">Facebook</a> </li>
					<li><a href="{{ $view->twt_link }}" target="_blank">Twiiter</a></li>
					<li><a href="{{ $view->ins_link }}" target="_blank">Instagram</a></li>
				</ul>
			</div>
			<div class="col-sm-2">
				<ul>
					<li><a href="#">Home</a> </li>
					<li><a href="#">Gallery</a></li>
					<li><a href="#">Package</a></li>
					<li> <a href="#">Blog</a></li>
				</ul>
			</div>
			<div class="col-md-6">
				<p style="color: white;margin-top: 50px;width : 60%;float:right;margin-right: 30px;"> <big>Jepret</big> Merupakan Wedding Organizer yang terdepan di kota bogor dan Wedding Organizer dan terpercaya di kota bogor </p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12" >
				<h3 class="title-footer"> Jepret </h3>
				<p class="copyright">Copyright &copy Jepret 2017. All Right reserved</p>
			</div>
			<div style="clear:both"></div>
		</div>
	</div>
</div>


	<script type="text/javascript" src="/js/jquery-1.11.3.js"></script>
<!-- 	<script type="text/javascript" src="/js/bootstrap.min.js"></script> -->
	<script type="text/javascript" src="/js/owl.carousel.js"></script>
	<script type="text/javascript" src="/js/main-page.js"></script>
	<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.js"></script>
	<script>
			var myVar;
			$(function(){
				$('.load').imagesLoaded(function myFunction() {
					myVar = setTimeout(showPage, 1000);
					}
				);
			});
			function showPage() {
			  document.getElementById("loader").style.display = "none";
			  document.getElementById("myDiv").style.display = "block";
			}
	</script>
	</body>
</html>
