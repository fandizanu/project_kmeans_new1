<?php include 'header.php'; ?>

<!-- Page Wrapper -->
<div class="page-wrapper">

	<!-- Page Content -->
	<div class="content container-fluid">

		<!-- Page Header -->
		<div class="page-header">
			<div class="row align-items-center">
				<div class="col">
					<h3 class="page-title">Kategori</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
						<li class="breadcrumb-item active">Data Kategori</li>
					</ul>
				</div>
				<div class="col-auto float-right ml-auto">
					<a href="#" class="btn add-btn" data-toggle="modal" data-target="#addTanaman"><i class="fa fa-plus"></i> Tambah</a>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">
				<div class="card mb-0">
					<div class="card-header">
						<h4 class="card-title mb-0">Data Kategori</h4>
						<br>						
						<a href="banjir_pdf.php" target="_blank" class="btn btn-sm btn-success"><i class="fa fa-print"></i> PDF</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-striped custom-table mb-0 datatable">
								<thead>
									<tr>
										<th width="1%">No</th>
										<th>Kelompok</th>
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
												<a class="btn btn-sm btn-warning" href="#" data-toggle="modal" data-target="#edittanaman<?php echo $d['tanaman_id']; ?>"><i class="fa fa-pencil m-r-5"></i> Edit</a>
												<a class="btn btn-sm btn-success" href="#" data-toggle="modal" data-target="#setTanaman<?php echo $d['tanaman_id']; ?>"> Setting</a>
												<a class="btn btn-sm btn-primary" href="banjir_nilai.php?id=<?= $d['tanaman_id'] ?>"> Nilai</a>
												<a href="banjir_hapus.php?id=<?= $d['tanaman_id'] ?>" class="btn btn-sm btn-danger"> Hapus </a>




												<div id="setTanaman<?php echo $d['tanaman_id']; ?>" class="modal custom-modal fade" role="dialog">
													<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
														<div class="modal-content">
															<div class="modal-header">
																<h5 class="modal-title">Pilih Kriteria </h5>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																	<span aria-hidden="true">&times;</span>
																</button>
															</div>
															<div class="modal-body">
																<!-- form -->
																<form method="post" action="banjir_setting.php">
																	<div class="row">
																		<div class="col-md-12">
																			<div class="form-group">
																				<label>Nama Kelompok</label>
																				<input type="hidden" name="tanaman" value="<?php echo $d['tanaman_id'] ?>">
																				<input type="text" disabled name="nama" class="form-control" required="required" value="<?php echo $d['tanaman_nama'] ?>" placeholder="Nama Lengkap">
																			</div>
																		</div>

																		<div class="col-md-12">
																			<div class="form-group">
																				<label>KRITERIA</label>
																				<table class="table table-bordered">
																					<thead>
																						<tr>
																							<th width="1%">Pilih</th>
																							<th>Kritera</th>
																						</tr>
																					</thead>
																					<tbody>
																						<?php
																						$kriteria = mysqli_query($koneksi,"select * from kriteria");
																						while($k = mysqli_fetch_array($kriteria)){
																							?>
																							<tr>
																								<td><input type="checkbox" name="kriteria[]" value="<?php echo $k['kriteria_id'] ?>"></td>
																								<td><?php echo $k['kriteria_nama'] ?></td>
																							</tr>
																							<?php
																						}
																						 ?>
																					</tbody>
																				</table>
																			</div>
																		</div>


																	</div>
																	<div class="submit-section">
																		<input type="submit" name="SIMPAN" value="UPDATE" class="btn btn-primary submit-btn">																		
																	</div>
																</form>

															</div>
														</div>
													</div>
												</div>


												<!-- <a href="tanaman_setting.php?id=<?= $d['tanaman_id'] ?>" class="btn btn-sm btn-primary"> Setting </a> -->
												<div id="edittanaman<?php echo $d['tanaman_id']; ?>" class="modal custom-modal fade" role="dialog">
													<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
														<div class="modal-content">
															<div class="modal-header">
																<h5 class="modal-title">Edit Data Kelompok</h5>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																	<span aria-hidden="true">&times;</span>
																</button>
															</div>
															<div class="modal-body">
																<!-- form -->
																<form method="post" action="banjir_update.php">
																	<div class="row">
																		<div class="col-md-12">
																			<div class="form-group">
																				<label>Nama Kelompok</label>
																				<input type="hidden" name="id" value="<?php echo $d['tanaman_id'] ?>">
																				<input type="text" name="nama" class="form-control" required="required" value="<?php echo $d['tanaman_nama'] ?>" placeholder="Nama Lengkap">
																			</div>
																		</div>												
																	</div>
																	<div class="submit-section">
																		<input type="submit" name="SIMPAN" value="UPDATE" class="btn btn-primary submit-btn">																		
																	</div>
																</form>

															</div>
														</div>
													</div>
												</div>


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

	<!-- Add Expense Modal -->
	<div id="addTanaman" class="modal custom-modal fade" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Tambah Data </h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="post" action="banjir_act.php">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Nama </label>
									<input type="text" name="nama" class="form-control" required="required" placeholder="Nama">
								</div>
							</div>							
							
						</div>
						<div class="submit-section">
							<input type="submit" name="SIMPAN" value="SIMPAN" class="btn btn-primary submit-btn">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- /Add Expense Modal -->

</div>
<!-- /Page Wrapper -->
<?php include 'footer.php' ?>