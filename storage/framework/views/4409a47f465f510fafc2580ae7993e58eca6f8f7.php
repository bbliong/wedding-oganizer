<!DOCTYPE html>
<html>
<head>
	<title> <?php echo $__env->yieldContent('title'); ?> </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	<link rel="stylesheet" type="text/css" href="/css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="/css/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="/asset/font-awesome/css/font-awesome.min.css">
</head>
<body>
	<div class="wrap">
	<div class="header-jumbotron">
		<?php echo $__env->yieldContent('header_text'); ?>
	</div>
	<nav class="navbar  navbar-inverse">
			  <div class="container-fluid">
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span> 
				      </button>    
				    </div>
				    <div class="collapse navbar-collapse" id="myNavbar">
				    	<div class="centered">
					      <ul class="nav navbar-nav ">
					        <li ><a href="/">Home</a></li>
					        <li><a href="/paket">Package </a></li>
					        <li><a href="/gallery">Gallery</a></li> 
					        <li><a href="/blog">Blog</a></li> 
					        <li><a href="/contact">Contact Us</a></li> 
					      </ul>
					     </div>
					</div>
			 	</div>
			</nav>
	<div class="header-image">
		<img src="/uploads/<?php echo $__env->yieldContent('header_image'); ?>">
		<a class="clickarea2"></a>
		<?php echo $__env->yieldContent('header_image_text'); ?>
	</div>
	<div class="container">
		<div class="main-body" >
			<div class="col-md-8" >
			<?php echo $__env->yieldContent('leftSide'); ?>
			</div>
			<div class="col-md-4">
			<?php echo $__env->yieldContent('rightSide'); ?>
			</div>
		</div>
	</div>

	</div>
	<script type="text/javascript" src="/js/jquery-1.11.3.js"></script>
	<script type="text/javascript" src="/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/js/owl.carousel.js"></script>
	<script >

	  $(document).ready(function() {
	    $(window).scroll(function () {
	    	// console.log($(window).scrollTop())
		    if ($(window).scrollTop() > 140) {
		      	$('.navbar-inverse').addClass('navbar-fixed-top resize1');
		    }
		    if ($(window).scrollTop() < 140) {
		      	$('.navbar-inverse').removeClass('navbar-fixed-top resize1');
		    }
	 	});
	});
	</script>
	</body>
</html>