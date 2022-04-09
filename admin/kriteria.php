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
					<a href="#" class="btn add-btn" data-toggle="modal" data-target="#addKriteria"><i class="fa fa-plus"></i> Tambah</a>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">
				<div class="card mb-0">
					<div class="card-header">
						<h4 class="card-title mb-0">Data Atribut</h4>
						<br>						
						<a href="kriteria_pdf.php" target="_blank" class="btn btn-sm btn-success"><i class="fa fa-print"></i> PDF</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-striped custom-table mb-0 datatable">
								<thead>
									<tr>
										<th width="1%">No</th>
										<th>Nama Atribut</th>
										<th width="10%" class="text-center">OPSI</th>
									</tr>
								</thead>
								<tbody>
									<?php							
									$no = 1;
									$data = mysqli_query($koneksi, "select * from kriteria order by kriteria_id desc");
									while ($d = mysqli_fetch_array($data)) {
										?>
										<tr>
											<td><?php echo $no++ ?></td>
											<td><?php echo $d['kriteria_nama']; ?></td>
											<td>
												<a class="btn btn-sm btn-warning" href="#" data-toggle="modal" data-target="#edittanaman<?php echo $d['kriteria_id']; ?>"><i class="fa fa-pencil m-r-5"></i> Edit</a>
												<a href="kriteria_hapus.php?id=<?= $d['kriteria_id'] ?>" class="btn btn-sm btn-danger"> Hapus </a>
												<div id="edittanaman<?php echo $d['kriteria_id']; ?>" class="modal custom-modal fade" role="dialog">
													<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
														<div class="modal-content">
															<div class="modal-header">
																<h5 class="modal-title">Edit Data </h5>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																	<span aria-hidden="true">&times;</span>
																</button>
															</div>
															<div class="modal-body">
																<!-- form -->
																<form method="post" action="kriteria_update.php">
																	<div class="row">
																		<div class="col-md-12">
																			<div class="form-group">
																				<label>Nama Atribut</label>
																				<input type="hidden" name="id" value="<?php echo $d['kriteria_id'] ?>">
																				<input type="text" name="nama" class="form-control" required="required" value="<?php echo $d['kriteria_nama'] ?>" placeholder="Nama Lengkap">
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
	<div id="addKriteria" class="modal custom-modal fade" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Tambah Data </h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="post" action="kriteria_act.php">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Nama </label>
									<input type="text" name="nama" class="form-control" required="required" placeholder="Nama Atribut">
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