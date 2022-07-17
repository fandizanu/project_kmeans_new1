<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="assets/img/earth.ico" rel="icon">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Poppins:wght@200;500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/index.css">
</head>
<style>
	section{
		padding-top:2rem;
	}
	section h1{
		font-family: 'Poppins', sans-serif;
	}
	section h2{
		
		font-family: 'Montserrat', sans-serif;
	}

</style>
<body>
<section id="map" style="background: #03e3fc; background: -moz-linear-gradient(left, #03e3fc 0%, #6703fc 100%); background: -webkit-linear-gradient(left, #03e3fc 0%, #6703fc 100%);
  background: -ms-linear-gradient(left, #03e3fc 0%, #6703fc 100%);  background: linear-gradient(to right, #03e3fc 0%, #6703fc 100%);">
		<div class="container-xxl hero-header" style="padding: 2rem 0">
		<div class="container">
			<div class="row g-5 align-items-center">
				<div class="col-lg-6 text-center text-lg-start">
					<h1 class="text-white mb-4 animated slideInDown">Sistem Informasi Geografis Banjir Kota Samarinda</h1>
					<p class="text-white pb-3 animated slideInDown">Peta Geografis Pembagian Daerah Rawan Banjir Kota Samarinda</p>
					
				</div>
				<div class="col-lg-6 text-center text-lg-start">
					<img class="img-fluid rounded animated zoomIn " src="gambar/Peta-Samarinda.png" alt="peta">
				</div>
			</div>
		</div>
		</div>
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,32L48,48C96,64,192,96,288,112C384,128,480,128,576,112C672,96,768,64,864,48C960,32,1056,32,1152,42.7C1248,53,1344,75,
		1392,85.3L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
</section>
<section style="padding-top:0;" id="kecamatan">
	<h2 class="text-center pb-5"> <b>Kecamatan</b></h2>
	<div class="container text-center px-4">
		<div class="row">
			<div class="col-md-4">
			<div class="card" >
				<!-- <img src="gambar/banjir.jpg" class="card-img-top" alt="..." > -->
				<div class="card-body">
					<h5 class="card-title">Samarinda Utara</h5>
					<p class="card-text">Samarinda Utara termasuk ke dalam kelompok <br> <b>Banjir Sering</b> </p>
					<a href="peta_kecamatan.php" class="btn btn-primary">Lihat Peta</a>
				</div>
				</div>
			</div>
			<div class="col">
			</div>
			<div class="col-md-4">
			<div class="card" >
				<!-- <img src="gambar/pinang.jpg" class="card-img-top" alt="..." style="width: 408px;height:200px;" > -->
				<div class="card-body">
					<h5 class="card-title">Sungai Pinang</h5>
					<p class="card-text">Sungai Pinang termasuk ke dalam kelompok <br> <b>Banjir Sering</b> </p>
					<a href="peta_kecamatan.php" class="btn btn-primary">Lihat Peta</a>
				</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container text-center px-4">
		<div class="row ">
			<div class="col-md-4">
			<div class="card" >
				<!-- <img src="gambar/kota1.jpg" class="card-img-top" alt="..." > -->
				<div class="card-body">
					<h5 class="card-title">Samarinda Kota</h5>
					<p class="card-text">Samarinda Kota termasuk ke dalam kelompok <br> <b>Banjir Jarang</b></p>
					<a href="peta_kecamatan.php" class="btn btn-primary">Lihat Peta</a>
				</div>
				</div>
			</div>		
			<div class="col">

			</div>	
			<div class="col-md-4 ">
			<div class="card" >
				<!-- <img src="gambar/ilir.jpg" class="card-img-top" alt="..."style="width: 408px;height:200px;" > -->
				<div class="card-body">
					<h5 class="card-title">Samarinda Ilir</h5>
					<p class="card-text">Samarinda Ilir termasuk ke dalam kelompok <br> <b>Banjir Sedang</b> </p>
					<a href="peta_kecamatan.php" class="btn btn-primary">Lihat Peta</a>
				</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container text-center px-4">
		<div class="row ">
			<div class="col-md-4">
			<div class="card" >
				<!-- <img src="gambar/ulu.jpg" class="card-img-top" alt="..." style="width: 408px;height:200px;" > -->
				<div class="card-body">
					<h5 class="card-title">Samarinda Ulu</h5>
					<p class="card-text">Samarinda Ulu termasuk ke dalam kelompok <br> <b>Banjir Sering</b></p>
					<a href="peta_kecamatan.php" class="btn btn-primary">Lihat Peta</a>
				</div>
				</div>
			</div>
			<div class="col">
			
			</div>
			<div class="col-md-4">
			<div class="card" >
				<!-- <img src="gambar/noimage.png" class="card-img-top" alt="..." style="width: 408px;height:200px;"> -->
				<div class="card-body">
					<h5 class="card-title">Sambutan</h5>
					<p class="card-text">Sambutan termasuk ke dalam kelompok <br><b>Banjir Jarang</b></p>
					<a href="peta_kecamatan.php" class="btn btn-primary">Lihat Peta</a>
				</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container text-center px-4">
		<div class="row">
			<div class="col-md-4">
			<div class="card" >
				<!-- <img src="gambar/noimage.png" class="card-img-top" alt="..." style="width: 408px;height:200px;"> -->
				<div class="card-body">
					<h5 class="card-title">Sungai Kunjang</h5>
					<p class="card-text">Sungai Kunjang termasuk ke dalam kelompok <br><b>Banjir Jarang</b></p>
					<a href="peta_kecamatan.php" class="btn btn-primary">Lihat Peta</a>
				</div>
				</div>
			</div>
			<div class="col">

			</div>
			<div class="col-md-4">
			<div class="card" >
				<!-- <img src="gambar/noimage.png" class="card-img-top" alt="..." style="width: 408px;height:200px;"> -->
				<div class="card-body">
					<h5 class="card-title">Palaran</h5>
					<p class="card-text">Palaran termasuk ke dalam kelompok <br><b>Banjir Jarang</b></p>
					<a href="peta_kecamatan.php" class="btn btn-primary">Lihat Peta</a>
				</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container text-center px-4">
		<div class="row">
			<div class="col-md-4">
			<div class="card">
				<!-- <img src="gambar/noimage.png" class="card-img-top" alt="..."  style="width: 400px;height:200px;"> -->
				<div class="card-body">
					<h5 class="card-title">Samarinda Seberang</h5>
					<p class="card-text">Samarinda Seberang termasuk ke dalam kelompok <br><b>Banjir Jarang</b></p>
					<a href="peta_kecamatan.php" class="btn btn-primary">Lihat Peta</a>
				</div>
				</div>
			</div>
			<div class="col">

			</div>
			<div class="col-md-4">
				<div class="card" >
					<!-- <img src="gambar/noimage.png" class="card-img-top" alt="..." style="width: 408px;height:200px;"> -->
					<div class="card-body">
						<h5 class="card-title">Loajanan Ilir</h5>
						<p class="card-text">Loajanan Ilir termasuk ke dalam kelompok <br><b>Banjir Jarang</b></p>
						<a href="peta_kecamatan.php" class="btn btn-primary">Lihat Peta</a>
					</div>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0bd2fc" fill-opacity="1" d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,
	1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
</section>
<section style="background-color:#0bd2fc; padding :2rem 0;" id="analisa" >
	<div class="kmeans">
		<div class="container">
			<h2 class="text-center" style="font-weight: bold;">Pengelompokan Banjir </h2>
			<div class="row">
				<div class="col">
					<h3 class="page-title">Analisa Kmeans </h3>
				
				</div>
			</div>
		</div>

		<div class="container" >
			<div class="row">
				
				<div class="col">
				<div class="card-body">

					<div class="table-responsive">
					<table class="table table-striped custom-table mb-0 datatable">
						<thead>
							<tr>
								<th width="1%">No</th>
								<th>Nama </th>
								<th width="10%" class="text-center">OPSI</th>
							</tr>
						</thead>
						<tbody>
							<?php							
							$no = 1;
							$data = mysqli_query($koneksi, "select * from tanaman order by tanaman_id desc");
							while ($d = mysqli_fetch_array($data)) {
								?>
								<tr>
									<td><?php echo $no++ ?></td>
									<td><?php echo $d['tanaman_nama']; ?></td>
									<td>							
										<a class="btn btn-sm btn-success" href="kmeans_analisa.php?id=<?= $d['tanaman_id'] ?>"> Analisa</a>
									</td>

								</tr>	
								<?php
							}
							?>

						</tbody>
					</table>

				</div>
				</div>
				</div>
			</div>
		</div>
	</div>

</section>

	
</body>
</html>

<main>
	
	<!-- /Hero -->
</main>
<!-- /main content -->
<?php include 'footer.php'; ?>