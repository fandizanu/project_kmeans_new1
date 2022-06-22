<?php include 'header.php'; ?>

<!-- Page Wrapper -->
<div class="page-wrapper">

	<!-- Page Content -->
	<div class="content container-fluid">

		<!-- Page Header -->
		<div class="page-header">
			<div class="row align-items-center">
				<div class="col">
					<h3 class="page-title">Data Atribut</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
						<li class="breadcrumb-item active">Data Atribut</li>
					</ul>
				</div>
				<div class="col-auto float-right ml-auto">
					<a href="banjir.php" class="btn add-btn"><i class="fa fa-minus"></i> Kembali</a>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">
				<div class="card mb-0">
					<div class="card-header">
						<h4 class="card-title mb-0">Data Atribut</h4>
						<br>
						<?php 
						if(isset($_GET['alert'])){
							if($_GET['alert'] == "gagal"){
								echo "<div class='alert alert-danger'>Data Sudah Tersedia!</div>";
							}
						}
						?>
						
					</div>




					<div class="card-body">
						<?php 
						$id = $_GET['id'];
						$data = mysqli_query($koneksi,"select * from tanaman where tanaman_id='$id'");
						$d = mysqli_fetch_assoc($data);
						?>						
						<form method="post" action="banjir_nilai_act.php">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Nama Kelompok</label>
										<input type="hidden" name="tanaman" value="<?php echo $d['tanaman_id'] ?>">
										<input type="text" disabled name="nama" class="form-control" required="required" value="<?php echo $d['tanaman_nama'] ?>" placeholder="Nama Lengkap">
									</div>
									<div class="form-group">
										<label>Kecamatan</label>
										<select class="form-control" name="kecamatan" required>
											<?php
											$kec = mysqli_query($koneksi,"select * from kecamatan");
											while($kc = mysqli_fetch_array($kec)){
												?>
												<option value="<?php echo $kc['kecamatan_id'] ?>"><?php echo $kc['kecamatan_nama'] ?></option>
												<?php
											}
											 ?>
										</select>
									</div>
								</div>

								<div class="col-md-12">
									<div class="form-group">
										<label>KRITERIA</label>
										<table class="table table-bordered">
											<thead>
												<tr>
													<th width="1%">No</th>
													<th>Kritera</th>
													<th>Nilai</th>
												</tr>
											</thead>
											<tbody>
												<?php
												$no=1;
												$krit = mysqli_query($koneksi,"select * from tanaman_kriteria,kriteria where tk_tanaman='$id' and tk_kriteria=kriteria_id");
												while($k = mysqli_fetch_array($krit)){
													?>
													<tr>
														<td>
															<?php echo $no++ ?>
															<input type="hidden" name="kriteria[]" value="<?php echo $k['kriteria_id'] ?>">
														</td>
														<td><?php echo $k['kriteria_nama']; ?></td>
														<td>
															<input type='number' step='0.000001' placeholder='0.00000' class="form-control" name="nilai[]" />
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
							<div class="text-right">
								<input type="submit" name="SIMPAN" value="SIMPAN" class="btn btn-primary">								
							</div>
						</form>						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Page Content -->
</div>
<!-- /Page Wrapper -->
<?php include 'footer.php' ?>