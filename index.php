<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="assets/img/earth.ico" rel="icon">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
</head>
<style>
	.menu{
		font-family: 'Montserrat', sans-serif;;
	}
</style>
<body>
	
		<div class="menu" style="background-color: #ddffff">
		<div class="content" style="text-align:center;  padding-bottom:5%; font-size:25px; ">
		
			<div class="w3-content w3-padding" style="max-width:1564px;">
			<div class="w3-container w3-padding-32 w3-pale-blue"  id="map" >			
				<h2 style="font-weight:bold">Sistem Informasi Geografis di Kota Samarinda</h2>	
				<p style="font-size:20px">Pembagian Daerah Rawan Banjir Kota Samarinda Berdasarkan Kecamatan</p>
				<img style="width:700px; height:520px;" src="gambar/Klereng.jpeg">
				<div class="content">      
					<div class="w3-container">
					<h2>Pembagian Wilayah</h2>
					<p>Pembagian Wilayah Banjir Per Kecamatan di Samarinda</p>
					</div>
					</div>
			</div>
			
	<div class="analisa" style=" padding-bottom:3% ; " >
	<div class="row" >
		<div class="col-sm-12" >
			<div class="card mb-0" >
				<div class="card-header">
					<h4 class="card-title mb-0">Analisa Cluster </h4>
					
				</div>
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
											
											<a class="btn btn-sm btn-success" href="kmeans_analisa_index.php?id=<?= $d['tanaman_id'] ?>"> Analisa</a>

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
	<div class="page-wrapper" style="padding:3% 0; background-color:#ddffff;display:none">

	<!-- Page Content -->
	<div class="content container-fluid" style="">

		<!-- Page Header -->
		<div class="page-header">
			<div class="row align-items-center">
				<div class="col">
					<h3 class="page-title">Pilih Pusat Cluster</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
						<li class="breadcrumb-item active">Pilih Pusat Cluster</li>
					</ul>
				</div>				
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">
				<div class="card mb-0">
					<div class="card-header">
						<h4 class="card-title mb-0">Pilih Pusat Cluster</h4>
						
					</div>
					<div class="card-body">

						<form method="get" action="kmeans_proses_index.php">
								
								<div class="table-responsive">
									<table class="table table-bordered">
										
										<tr>
											<th width="10%" class="bg-primary">Centroid 1</th>
											<td width="15%">
												<label>Kecamatan</label>
												<input type="hidden" name="tanaman" value="<?php echo $_GET['id'] ?>">
												<select class="form-control pilih-desa1" name="centroid1" required="required">
												
													<?php
													$data = mysqli_query($koneksi,"select * from kecamatan where kecamatan_id = 20");		
													while($d=mysqli_fetch_array($data)){
														?>
														<option value="<?php echo $d['kecamatan_id'] ?>"><?php echo $d['kecamatan_nama'] ?></option>
														<?php
													}
													?>
												</select>
											</td>

										</tr>
										<tr>
											<th width="10%"  class="bg-primary">Centroid 2</th>
											<td width="15%">
												<label>Kecamatan</label>
												<select class="form-control pilih-desa2" name="centroid2" required="required">
													
													<?php
													$data = mysqli_query($koneksi,"select * from kecamatan where kecamatan_id = 21");		
													while($d=mysqli_fetch_array($data)){
														?>
														<option value="<?php echo $d['kecamatan_id'] ?>"><?php echo $d['kecamatan_nama'] ?></option>
														<?php
													}
													?>
												</select>
											</td>
										
										</tr>

										<tr>
											<th width="10%"  class="bg-primary">Centroid 3</th>
											<td width="15%">
												<label>kecamatan</label>
												<select class="form-control pilih-desa3" name="centroid3" required="required">
													
													<?php
													$data = mysqli_query($koneksi,"select * from kecamatan where kecamatan_id = 2");		
													while($d=mysqli_fetch_array($data)){
														?>
														<option value="<?php echo $d['kecamatan_id'] ?>"><?php echo $d['kecamatan_nama'] ?></option>
														<?php
													}
													?>
												</select>
											</td>											
										</tr>

									</table>
								</div>

								<div class="d-flex justify-content-center" style="padding-bottom:3%;">
									<input type="submit" value="HITUNG!" class="btn btn-primary"> 
								</div>

							</form>


					</div>
					
				</div>
			</div>
		</div>



	</div>
	<!-- /Page Content -->

</div>
</div>
</body>
</html>

<main>
	
	<!-- /Hero -->
</main>
<!-- /main content -->
<?php include 'footer.php'; ?>