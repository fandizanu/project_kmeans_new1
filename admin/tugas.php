<?php include 'header.php'; ?>

<!-- Page Wrapper -->
<div class="page-wrapper">

	<!-- Page Content -->
	<div class="content container-fluid">

		<!-- Page Header -->
		<div class="page-header">
			<div class="row align-items-center">
				<div class="col">
					<h3 class="page-title">Tugas Karyawan</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
						<li class="breadcrumb-item active">Tugas Karyawan</li>
					</ul>
				</div>
				<div class="col-auto float-right ml-auto">
					<a href="#" class="btn add-btn" data-toggle="modal" data-target="#tugasAdd"><i class="fa fa-plus"></i> Tambah</a>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">
				<div class="card mb-0">
					<div class="card-header">
						<h4 class="card-title mb-0">Data Tugas</h4>
					<!-- 	<br>
						<a href="inventaris_print.php" target="_blank" class="btn btn-sm btn-primary"><i class="fa fa-print"></i> Print</a>
						<a href="inventaris_excel.php" target="_blank" class="btn btn-sm btn-danger"><i class="fa fa-print"></i> Excel</a>
						<a href="inventaris_pdf.php" target="_blank" class="btn btn-sm btn-success"><i class="fa fa-print"></i> PDF</a> -->
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-striped custom-table mb-0 datatable">
								<thead>
									<tr>
										<th>No</th>
										<th>Tugas</th>
										<th>Tanggal Pemberian</th>								
										<th>Karyawan</th>
										<th>Status</th>
										<th>Opsi</th>
									</tr>
								</thead>
								<tbody>
									<?php							
									$no = 1;
									$data = mysqli_query($koneksi, "select * from tugas, karyawan where tugas_karyawan=karyawan_id order by tugas_id desc");
									while ($d = mysqli_fetch_array($data)) {
										?>
										<tr>
											<td><?php echo $no++ ?></td>
											<td><?php echo $d['tugas_keterangan']; ?></td>
											<td><?php echo date('d-m-Y', strtotime($d['tugas_tanggal_pemberian'])); ?></td>
											<td><?php echo $d['karyawan_nama']; ?></td>
											<td><?php echo $d['tugas_status']; ?></td>
											<td>
												<a class="btn btn-sm btn-warning" href="#" data-toggle="modal" data-target="#tugas_edit<?php echo $d['tugas_id']; ?>"> Edit</a>
												<a href="tugas_hapus.php?id=<?= $d['tugas_id'] ?>" class="btn btn-sm btn-danger"> Hapus </a>
												<a href="tugas_detail.php?id=<?= $d['tugas_id'] ?>" class="btn btn-sm btn-primary"> Detail </a>

												<!-- Add Expense Modal -->
												<div id="tugas_edit<?php echo $d['tugas_id']; ?>" class="modal custom-modal fade" role="dialog">
													<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
														<div class="modal-content">
															<div class="modal-header">
																<h5 class="modal-title">Edit Tugas ke Karyawan</h5>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																	<span aria-hidden="true">&times;</span>
																</button>
															</div>
															<div class="modal-body">
																<form method="post" action="tugas_update.php">
																	<div class="row">
																		<div class="col-md-12">
																			<div class="form-group">
																				<label>Tugas</label>
																				<input type="hidden" name="id" value="<?php echo $d['tugas_id'] ?>">
																				<textarea class="form-control" name="keterangan" required="required"><?php echo $d['tugas_keterangan'] ?></textarea>
																			</div>
																		</div>
																		<div class="col-md-12">
																			<div class="form-group">
																				<label>Tanggal Pemberian</label>
																				<input type="date" name="tanggal" class="form-control" value="<?php echo $d['tugas_tanggal_pemberian'] ?>" required="required">
																			</div>
																		</div>
																		<div class="col-md-12">
																			<div class="form-group">
																				<label>Karyawan</label>
																				<select class="form-control" name="pengguna" required="required">
																					<option value="">--Pilih--</option>
																					<?php
																					$pengguna = mysqli_query($koneksi,"select * from karyawan");
																					while($p = mysqli_fetch_array($pengguna)){
																						?>
																						<option <?php if($d['tugas_karyawan']==$p['karyawan_id']){echo "selected='selected'" ; } ?> value="<?php echo $p['karyawan_id'] ?>"><?php echo $p['karyawan_nama'] ?></option>
																						<?php
																					}
																					?>
																				</select>
																			</div>
																		</div>

																		<div class="col-md-12">
																			<div class="form-group">
																				<label>Status</label>																				
																				<select class="form-control" name="status" required="required">
																					<option value="">--Pilih--</option>
																					<option <?php if($d['tugas_status']=="Upload"){echo "selected='selected'" ; } ?> value="Upload">Upload</option>
																					<option <?php if($d['tugas_status']=="Proses"){echo "selected='selected'" ; } ?> value="Proses">Proses</option>
																					<option <?php if($d['tugas_status']=="Selesai"){echo "selected='selected'" ; } ?> value="Selesai">Selesai</option>
																				</select>
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
	<div id="tugasAdd" class="modal custom-modal fade" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Pemberian Tugas ke Karyawan</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="post" action="tugas_act.php">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Tugas</label>
									<textarea class="form-control" name="keterangan" required="required"></textarea>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label>Tanggal Pemberian</label>
									<input type="date" name="tanggal" class="form-control" required="required">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label>Karyawan</label>
									<select class="form-control" name="pengguna" required="required">
										<option value="">--Pilih--</option>
										<?php
										$pengguna = mysqli_query($koneksi,"select * from karyawan");
										while($p = mysqli_fetch_array($pengguna)){
											?>
											<option value="<?php echo $p['karyawan_id'] ?>"><?php echo $p['karyawan_nama'] ?></option>
											<?php
										}
										?>
									</select>
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