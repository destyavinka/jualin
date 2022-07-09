<!DOCTYPE html>
<html lang="en">
<?php

session_start();
if (!isset($_SESSION['masuk'])) {
	header("location:form_user.php");
	exit;
}
?>

<head>
	<meta charset="utf-8">
	<title>Home | JUAL.IN</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/profile.png" type="image/x-icon">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@100;200;300;400;500;600;700;800;900&family=DM+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<!-- Bootstrap 4.5.2 CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<!-- Slick 1.8.1 jQuery plugin CSS (Sliders) -->
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
	<!-- Fancybox 3 jQuery plugin CSS (Open images and video in popup) -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
	<!-- AOS 2.3.4 jQuery plugin CSS (Animations) -->
	<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
	<!-- FontAwesome CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<!-- Startup CSS (Styles for all blocks) - Remove ".min" if you would edit a css code -->
	<link href="css/style.min.css" rel="stylesheet" />

	<!-- jQuery 3.5.1 -->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
	<!-- Header 1 -->
	<header class="pt-195 pb-110 bg-light header_1">
		<nav class="header_menu_1 pt-30 pb-30 mt-30">
			<div class="container px-xl-0">
				<div class="row justify-content-center align-items-center f-18 medium">
					<div class="col-lg-3">
						<img src="i/jual.in.png" alt="Logo" class="img-fluid" data-aos="fade-down" data-aos-delay="1000">
						</a>
					</div>
					<div class="col-lg-6 text-center" data-aos="fade-down" data-aos-delay="750">
						<a href="index.html" class="link color-heading mx-15">
							Home
						</a>
						<a href="new.html" class="link color-heading mx-15">
							New Arrival
						</a>
						<a href="about.php" class="link color-heading mx-15">
							About
						</a>
						<a href="#" class="link color-heading f-16 mx-15">
							<i class="fas fa-search">
							</i>
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 d-flex justify-content-end align-items-center" data-aos="fade-down" data-aos-delay="1000">
						<form action="dash.php?page=cart" method="post"></form>
						<a href="dash.php?page=cart" class="link color-heading f-20 mx-35">
							<i class="fas fa-shopping-cart"></i>

						</a>

						<a href="form_user.php" class="link mr-20 color-heading">
							Sign In
						</a>
						<a href="signup.php" class="btn sm action-1">
							Sign Up
						</a>
					</div>
				</div>
			</div>
		</nav>
		<div class="container">
			<!-- <div class="mb-3 text-center d-block d-xl-none">
				<a href="#" class="link img_link">
					<img src="i/logo.svg" alt="Logo" class="img-fluid" data-aos="fade-down" data-aos-delay="0">
				</a>
			</div> -->
			<h1 class="big text-center" data-aos="fade-down" data-aos-delay="0">
				Solobarcode Computama
			</h1>
			<div class="mw-600 mx-auto mt-30 f-22 color-heading text-center text-adaptive" data-aos="fade-down" data-aos-delay="250">
				jual.in melayani pembelian peralatan Barcode, AIDC, Mesin Absen, Printer, dan RFID.
			</div>
			<div class="mt-80 text-center buttons" data-aos="fade-down" data-aos-delay="500">

				<div>
					<a href="products.php" class="link btn lg action-1">
						SHOP NOW
					</a>
				</div>
				<div>
				</div>
			</div>
		</div>
	</header>




	<!-- gReCaptcha popup (uncomment if you need a recaptcha integration) -->
	<!--
		<div class="bg-dark op-8 grecaptcha-overlay"></div>
		<div class="bg-light radius10 w-350 h-120 px-20 pt-20 pb-20 grecaptcha-popup">
			<div class="w-full h-full d-flex justify-content-center align-items-center">
				<div id="g-recaptcha" data-sitekey="PUT_YOUR_SITE_KEY_HERE"></div>
			</div>
		</div>
		<script src="https://www.google.com/recaptcha/api.js?render=explicit" async defer></script>
		-->
	<!-- Bootstrap 4.5.2 JS -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
	<!-- Fancybox 3 jQuery plugin JS (Open images and video in popup) -->
	<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
	<!-- 
			Google maps JS API 
			Don't forget to replace the key "AIzaSyDP6Ex5S03nvKZJZSvGXsEAi3X_tFkua4U" to your own! 
			Learn how to get a key: https://help.designmodo.com/article/startup-google-maps-api/ 
		-->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyDP6Ex5S03nvKZJZSvGXsEAi3X_tFkua4U"></script>
	<!-- Slick 1.8.1 jQuery plugin JS (Sliders) -->
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<!-- AOS 2.3.4 jQuery plugin JS (Animations) -->
	<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
	<!-- Maskedinput jQuery plugin JS (Masks for input fields) -->
	<script src="js/jquery.maskedinput.min.js"></script>
	<!-- Startup JS (Custom js for all blocks) -->
	<script src="js/script.js"></script>
</body>

</html>