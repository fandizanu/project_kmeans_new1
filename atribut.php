<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="menu" style="padding:50px 100px; ">
    <div class="row" >
			<div class="col-sm-12" >
				<div class="card mb-0">
					<div class="card-header">
						<h4 class="card-title mb-0">Data Atribut</h4>
						<br>						
						
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-striped custom-table mb-0 datatable">
								<thead>
									<tr>
										<th width="1%">No</th>
										<th >Nama Atribut</th>
										
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
												<div id="edittanaman<?php echo $d['kriteria_id']; ?>" class="modal custom-modal fade" role="dialog">
													<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
														<div class="modal-content">
															
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

</body>
</html>
<?php include 'footer.php'; ?>