
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Ansonika">
	<title>SIG Banjir Kota Samarinda</title>

	<!-- Favicons-->
	<link rel="shortcut icon" href="assets/img/earth.ico" type="image/x-icon">

	<!-- BASE CSS -->
	<link href="assets_front/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets_front/css/style.css" rel="stylesheet">
	<link href="assets_front/css/menu.css" rel="stylesheet">
	<link href="assets_front/css/vendors.css" rel="stylesheet">
	<link href="assets_front/css/icon_fonts/css/all_icons_min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style/beranda.css">    
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="assets/css/header.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Pacifico&display=swap" rel="stylesheet">
	
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<script	script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	-
	<!-- YOUR CUSTOM CSS -->
	<link href="assets_front/css/custom.css" rel="stylesheet">

	<link rel="stylesheet" href="assets_front/leaflet/leaflet.css" />
	<!-- <script src="bintuni4.js"></script> -->
	<script src="assets_front/leaflet/leaflet.js"></script>
	<script src="assets_front/leaflet/leaflet-src.js"></script>
	<!-- <script type="text/javascript" src="https://leafletjs.com/examples/choropleth/us-states.js"></script> -->


</head>

<style type="text/css">
	.menu-xxx{
		background: white !important;
		right: 3px !important;
		left: -200px !important;
		float: right !important;
		color: #232323 !important;
	}
	.menu-xxx-dalam{
		padding: 10px;
	}

</style>

<body>
	
	<?php include 'koneksi.php'; ?>
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background: #03e3fc; background: -moz-linear-gradient(left, #03e3fc 0%, #6703fc 100%); background: -webkit-linear-gradient(left, #03e3fc 0%, #6703fc 100%);
  background: -ms-linear-gradient(left, #03e3fc 0%, #6703fc 100%);  background: linear-gradient(to right, #03e3fc 0%, #6703fc 100%);" >
	<div class="container" style="font-size:larger;">
		<a class="navbar-brand" href="index.php" style="font-family: 'Pacifico', cursive; color:#0320fc">Sistem Informasi Geografis Samarinda</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav ms-auto " >
			<li class="nav-item">
				<a class="nav-link" href="index.php">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="peta_kecamatan.php">Peta Kecamatan</a>
			</li>
			<!-- <li class="nav-item">
				<a class="nav-link" href="kmeans.php">Transformasi</a>
			</li> -->
			<li class="nav-item">
				<a class="nav-link" href="atribut.php">Atribut</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="tentang.php">Tentang</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="login.php">Login</a>
			</li>
			
		</ul>
		</div>
	</div>
	</nav>
</body>
		<!-- /header -->
		<style type="text/css">
			.version_xxx {
				background: url(assets_front/img/pertanian.png) center bottom no-repeat #28b6f6;
				background-size: auto auto;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;
				background-size: cover;
			}
		</style>

