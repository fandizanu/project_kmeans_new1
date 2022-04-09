<?php include 'header.php'; ?>

<!-- Page Wrapper -->
<div class="menu" style=" background-color:#ddffff;  ">
<div class="page-wrapper" style="padding:50px 100px">

<!-- Page Content -->
<div class="content container-fluid" >

	<!-- Page Header -->
	<div class="page-header">
		<div class="row align-items-center">
			<div class="col">
				<h3 class="page-title">Transformasi Data </h3>
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
					<li class="breadcrumb-item active">Transformasi Data </li>
				</ul>
			</div>				
		</div>
	</div>

	<div class="row">
		<div class="col-sm-12">
			<div class="card mb-0">
				<div class="card-header">
					<h4 class="card-title mb-0">Transformasi Data </h4>
					
				</div>
				<div class="card-body">

					<div class="table-responsive">
						<table class="table table-striped custom-table mb-0 datatable">
							<thead>
								<tr>
									<th width="1%">No</th>
									<th>Nama </th>
									<th width="15%" class="text-center">OPSI</th>
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
											<a class="btn btn-sm btn-primary" href="kmeans_nilai.php?id=<?= $d['tanaman_id'] ?>"> Nilai</a>
											<a class="btn btn-sm btn-success" href="kmeans_analisa.php?id=<?= $d['tanaman_id'] ?>"> Lihat Transformasi Data</a>

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
<!-- /Page Content -->

</div>
</div>
<!-- /Page Wrapper -->
<?php include 'footer.php' ?>