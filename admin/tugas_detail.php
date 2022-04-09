<?php include 'header.php'; ?>

<!-- Page Wrapper -->
<div class="page-wrapper">

	<!-- Page Content -->
	<div class="content container-fluid">

		<!-- Page Header -->
		<div class="page-header">
			<div class="row">
				<div class="col-sm-12">
					<h3 class="page-title">Histori Tugas Karyawan</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
						<li class="breadcrumb-item active">Histori Tugas Karyawan</li>
					</ul>
				</div>
				<div class="col-auto float-right ml-auto">
					<a href="tugas.php" class="btn add-btn"><i class="fa fa-minus"></i> Kembali</a>
				</div>
			</div>
		</div>
		<!-- /Page Header -->

		<?php
		$id = mysqli_real_escape_string($koneksi, $_GET['id']);
		$data = mysqli_query($koneksi,"select * from tugas, karyawan where tugas_id='$id' and tugas_karyawan=karyawan_id");
		$d = mysqli_fetch_assoc($data);
		?>



		<div class="card mb-0">
			<div class="card-body">
				<div class="row">
					<div class="col-md-12">
						<div class="profile-view">
							<div class="profile-img-wrap">
								<div class="profile-img">
									<a href="#"><img alt="" src="../gambar/karyawan/<?php echo $d['karyawan_foto'] ?>"></a>
								</div>
							</div>
							<div class="profile-basic">
								<div class="row">
									<div class="col-md-5">
										<div class="profile-info-left">
											<h3 class="user-name m-t-0 mb-0"><?php echo $d['karyawan_nama'] ?></h3>
											<h6 class="text-muted">Karyawan</h6>											
										</div>
									</div>
									<div class="col-md-7">
										<ul class="personal-info">
											<li>
												<div class="title">Kontak :</div>
												<div class="text"><a href=""><?php echo $d['karyawan_kontak'] ?></a></div>
											</li>
											<li>
												<div class="title">Email:</div>
												<div class="text"><a href=""><?php echo $d['karyawan_email'] ?></a></div>
											</li>											
											<li>
												<div class="title">Alamat :</div>
												<div class="text"><?php echo $d['karyawan_alamat'] ?></div>
											</li>
											<li>
												<div class="title">Jenis Kelamin:</div>
												<div class="text"><?php echo $d['karyawan_kelamin'] ?></div>
											</li>											
										</ul>
									</div>
								</div>
							</div>
							


						</div>
					</div>
				</div>				
			</div>			
		</div>	
		<br>	
		<div class="card mb-0">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="card">
						<div class="card-body">
							<h3 class="card-title">Tugas</h3>
							<div class="table-responsive">
								<table class="table table-striped custom-table mb-0">
									<thead>
										<tr>
											<th>No</th>
											<th>Tugas</th>
											<th>Tanggal Pemberian</th>
											<th>Karyawan</th>
											<th>Status</th>
											<th>Bukti</th>
										</tr>
									</thead>
									<tbody>
										<?php							
										$no = 1;
										$data = mysqli_query($koneksi, "select * from tugas_histori, tugas, karyawan where th_tugas='$id' and th_tugas=tugas_id and tugas_karyawan=karyawan_id order by tugas_id desc");
										while ($d = mysqli_fetch_array($data)) {
											?>
											<tr>
												<td><?php echo $no++ ?></td>
												<td><?php echo $d['tugas_keterangan']; ?></td>
												<td><?php echo date('d-m-Y', strtotime($d['tugas_tanggal_pemberian'])); ?></td>
												<td><?php echo $d['karyawan_nama']; ?></td>
												<td><?php echo $d['th_keterangan']; ?></td>
												<td>
													<?php
													if($d['th_file'] !=""){
														?>
														<a href="../file/<?php echo $d['th_file'] ?>" target="_blank"><?php echo $d['th_file'] ?></a>
														<?php
													}else{

													}
													 ?>

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
	<!-- /Page Wrapper -->
</div>

<?php include 'footer.php'; ?>
