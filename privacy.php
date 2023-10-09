<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Notal-Crest Digital Tools</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="assets/img/favicon/favicon.ico" rel="icon">
	<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="assets/vendor/aos/aos.css" rel="stylesheet">
	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
	<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
	<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>

	<!-- Template Main CSS File -->
	<link href="assets/css/style.css" rel="stylesheet">

	<!-- --------------- -->
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
	
	<!-- Latest compiled and minified CSS -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.6.0/clipboard.min.js"></script>
	
	
</head>
<body>

	<!-- ======= Header ======= -->
	<header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php" style="max-width: fit-content;">NC- Digital Tools</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link" href="index.php">Home</a></li>
          <li><a class="nav-link" href="#about">About</a></li>
          <li><a class="nav-link" href="#services">Services</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->


  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
	<section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Privacy Policy Generator</li>
        </ol>
          <h3>Notal - Crest Privacy Policy Generator</h3>
      </div>
    </section><!-- End Breadcrumbs -->

	<section class="inner-page">
		<div class="container m-auto p-0">
			<p class="text-center" style="padding: 0 20px;">
			Notal Crest Privacy Policy Generator is a free generator that lets you generate a privacy policy agreement for your site in seconds. You can quickly generate the agreement to include on your privacy policy page. Privacy policies are mandatory by law if you collect personal data from users.
			</p>

			<div class="row">
				<div class="col-md- card m-auto p-3" ng-app="">
				<fieldset class="border p-3">
					<legend class="float-none w-auto" ><b>Generate Your Company Privacy Policy </b></legend>
					<label for="in1"><b>Company Name:</b></label>
					<input type="text" ng-model="compname" class="form-control" id="in1">
					<br>
					<button type="button" class="btn btn-primary priv-btn btn-sm"  onclick="generate_priv()" data-clipboard-target="#privacy-policy">Copy to clipboard</button>
					<button type="button" class="btn btn-primary btn-sm" id="gen">Generate</button> 
<br>

					<div id="privacy-policy" class="mt-3 border p-2">
						<h1>{{compname}} Privacy Policy</h1>
						<p>{{compname}} takes your privacy seriously. This policy page is to inform you of the personal information we gather, and how we use, store and protect it.</p>

						<h2>Data We Collect</h2>
						<p>In order to track the usage habits of our visitors, we collect data such as your IP address, 
						your ISP (internet service provider), your web browser, the time you visited the site, and which pages you viewed during your visit. 
						Except for the information you submit to {{compname}}, we do not gather or store any information which can be used to identify you personally 
						(such as your name, email address, physical address, telephone number, bank account number or credit card numbers).</p>

						<h2>Web Cookies</h2>
						<p>We use cookies to store certain visitor information, such as user display preferences, and to provide the ability to log in to certain areas of the site.</p>

						<p><h2>Advertising Cookies</h2>
						<p>At times, we may use advertising programs to help support the running of this site. These companies use cookies to serve advertisements on this site.</p>

						<h2>Third Parties</h2>
						<p>We do not sell any information you submit to third parties.</p>
						<br>
						<p>Thank you for visiting {{compname}}!</p>
					</div>
				</fieldset>
				</div>

			</div>
		</div>
	</section>
  </main>
	<script>
		function generate_priv() {
			new Clipboard('.priv-btn');
		};
		
		
	</script>


<?php
include("inc/footer.php")
?>