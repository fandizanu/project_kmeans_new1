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
				<h2 style="font-weight:bold">Sistem Informasi Geografis Kota Samarinda</h2>	
				<p style="font-size:20px">Pembagian Daerah Rawan Banjir Kota Samarinda Berdasarkan Kecamatan</p>
				<img style="width:700px; height:520px;" src="gambar/Klereng.jpeg">
				<div class="content">      
					<div class="w3-container">
					<h2>Pembagian Wilayah</h2>
					<p>Pembagian Wilayah Banjir Per Kecamatan di Samarinda</p>
					</div>
					</div>
			</div>
			
	<div class="analisa" style=" padding-bottom:3%;">
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
	
</div>
</body>
</html>

<main>
	
	<!-- /Hero -->
</main>
<!-- /main content -->
<?php include 'footer.php'; ?>