<?php include 'header.php'; ?>

<!-- Page Wrapper -->
<div class="page-wrapper">

	<!-- Page Content -->
	<div class="content container-fluid">

		<!-- Page Header -->
		<div class="page-header">
			<div class="row align-items-center">
				<div class="col">
					<h3 class="page-title">Data Kecamatan</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
						<li class="breadcrumb-item active">Data Kecamatan</li>
					</ul>
				</div>
				<div class="col-auto float-right ml-auto">
					<a href="#" class="btn add-btn" data-toggle="modal" data-target="#addKecamatan"><i class="fa fa-plus"></i> Tambah</a>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">
				<div class="card mb-0">
					<div class="card-header">
						<h4 class="card-title mb-0">Data Kecamatan</h4>
						<br>						
						<a href="kecamatan_pdf.php" target="_blank" class="btn btn-sm btn-success"><i class="fa fa-print"></i> PDF</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-striped custom-table mb-0 datatable">
								<thead>
									<tr>
										<th width="1%">No</th>
										<th>Nama Kecamatan</th>
										<th>Alamat</th>
										<th>Lattitude</th>
										<th>Longitude</th>
										<th width="10%" class="text-center">OPSI</th>
									</tr>
								</thead>
								<tbody>
									<?php							
									$no = 1;
									$data = mysqli_query($koneksi, "select * from kecamatan order by kecamatan_id desc");
									while ($d = mysqli_fetch_array($data)) {
										?>
										<tr>
											<td><?php echo $no++ ?></td>
											<td><?php echo $d['kecamatan_nama']; ?></td>
											<td><?php echo $d['kecamatan_alamat']; ?></td>
											<td><?php echo $d['kecamatan_latitude']; ?></td>
											<td><?php echo $d['kecamatan_longtitude']; ?></td>
											<td>
												<a class="btn btn-sm btn-warning" href="#" data-toggle="modal" data-target="#editKecamatan<?php echo $d['kecamatan_id']; ?>"><i class="fa fa-pencil m-r-5"></i> Edit</a>
												<a href="kecamatan_hapus.php?id=<?= $d['kecamatan_id'] ?>" class="btn btn-sm btn-danger"> Hapus </a>
												<div id="editKecamatan<?php echo $d['kecamatan_id']; ?>" class="modal custom-modal fade" role="dialog">
													<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
														<div class="modal-content">
															<div class="modal-header">
																<h5 class="modal-title">Edit Data Kecamatan</h5>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																	<span aria-hidden="true">&times;</span>
																</button>
															</div>
															<div class="modal-body">
																<!-- form -->
																<form method="post" action="kecamatan_update.php" enctype="multipart/form-data">
																	<div class="row">
																		<div class="col-md-12">
																			<div class="form-group">
																				<label>Nama Kecamatan</label>
																				<input type="hidden" name="id" value="<?php echo $d['kecamatan_id'] ?>">
																				<input type="text" name="nama" class="form-control" required="required" value="<?php echo $d['kecamatan_nama'] ?>" placeholder="Nama Lengkap">
																			</div>
																			<div class="form-group">
																				<label>Alamat Lengkap</label>						
																				<input type="text" name="alamat" class="form-control" required="required" value="<?php echo $d['kecamatan_alamat'] ?>" placeholder="Alamat Lengkap">
																			</div>
																			<div class="form-group">
																				<label>Latitude</label>						
																				<input type="text" name="latitude" class="form-control" required="required" value="<?php echo $d['kecamatan_latitude'] ?>" placeholder="Latitude">
																			</div>
																			<div class="form-group">
																				<label>Longitude</label>						
																				<input type="text" name="longtitude" class="form-control" required="required" value="<?php echo $d['kecamatan_longtitude'] ?>" placeholder="Latitude">
																			</div>
																			<div class="form-group">
																				<a href="https://www.latlong.net/" target="_blank">KLIK DI SINI UNTUK MENEMUKAN LATITUDE DAN LONGTITUDE MUSTAHIK</a>
																			</div>
																			<div class="form-group">
																				<label>Foto</label>
																				<input type="file" name="foto">
																				<p style="color: red;">*input jika akan diganti</p>
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
	<div id="addKecamatan" class="modal custom-modal fade" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Tambah Data Kecamatan</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="post" action="kecamatan_act.php" enctype="multipart/form-data">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Nama Kecamatan</label>
									<input type="text" name="nama" class="form-control" required="required" placeholder="Nama Kecamatan">
								</div>
								<div class="form-group">
									<label>Alamat Lengkap</label>
									<input type="text" name="alamat" class="form-control" required="required" placeholder="Nama Kecamatan">
								</div>
								<div class="form-group">
									<label>Latitude</label>
									<input type="text" name="latitude" class="form-control" required="required" placeholder="Latitude Kecamatan">
								</div>
								<div class="form-group">
									<label>Longtitude</label>
									<input type="text" name="longitude" class="form-control" required="required" placeholder="Longtitude Kecamatan">
								</div>
								<div class="form-group">
									<a href="https://www.latlong.net/" target="_blank">KLIK DI SINI UNTUK MENEMUKAN LATITUDE DAN LONGTITUDE MUSTAHIK</a>
								</div> 
								<div class="form-group">
									<label>Foto</label>
									<input type="file" name="foto">
									<p style="color: red;">*input jika akan diganti</p>
								</div>
							</div>							
							
						</div>
						<div class="submit-section">
							<input type="submit" name="SIMPAN" value="SIMPAN" class="btn btn-primary submit-btn">
							<!-- <button class="btn btn-primary submit-btn">Submit</button> -->
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