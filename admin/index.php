<?php include 'header.php'; ?>

<!-- Page Wrapper -->
<div class="page-wrapper">

	<!-- Page Content -->
	<div class="content container-fluid">

		<!-- Page Header -->
		<div class="page-header">
			<div class="row">
				<div class="col-sm-12">
					<h3 class="page-title">Welcome <?php echo $_SESSION['nama']; ?></h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item active">Dashboard</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /Page Header -->

		<div class="row">
			<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
				<div class="card dash-widget">
					<div class="card-body">
						<span class="dash-widget-icon"><i class="fa fa-cubes"></i></span>						
						<div class="dash-widget-info">
							<?php
							$admin = mysqli_query($koneksi,"select * from admin");
							 ?>
							<h3><?php echo mysqli_num_rows($admin) ?></h3>
							<span>Admin</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
				<div class="card dash-widget">
					<div class="card-body">
						<span class="dash-widget-icon"><i class="fa fa-user"></i></span>					
						<div class="dash-widget-info">
							<?php
							$kecamatan = mysqli_query($koneksi,"select * from kecamatan");
							 ?>
							<h3><?php echo mysqli_num_rows($kecamatan) ?></h3>
							<span>Kecamatan</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
				<div class="card dash-widget">
					<div class="card-body">
						<span class="dash-widget-icon"><i class="fa fa-diamond"></i></span>						
						<div class="dash-widget-info">
							<?php
							$kriteria = mysqli_query($koneksi,"select * from kriteria");
							 ?>
							<h3><?php echo mysqli_num_rows($kriteria) ?></h3>
							<span>Kriteria</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
				<div class="card dash-widget">
					<div class="card-body">
						<span class="dash-widget-icon"><i class="fa fa-user"></i></span>						
						<div class="dash-widget-info">
							<h3>4</h3>
							<span>Inventory</span>
						</div>
					</div>
				</div>
			</div>


			<div class="col-sm-12">
				<div class="jumbotron text-center">
					<h1>SELAMAT DATANG DI HALAMAN ADMIN CLUSTERING BANJIR BANJIR KOTA SAMARINDA</h1>
					
				</div>
			</div>

		</div>

	
	</div>
	<!-- /Page Wrapper -->

	<?php include 'footer.php'; ?>


