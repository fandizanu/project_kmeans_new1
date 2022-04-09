<?php include 'header.php'; ?>

<!-- Page Wrapper -->
<div class="page-wrapper">

	<!-- Page Content -->
	<div class="content container-fluid">

		<!-- Page Header -->
		<div class="page-header">
			<div class="row">
				<div class="col-sm-12">
					<h3 class="page-title">Profil Saya</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
						<li class="breadcrumb-item active">Profil Saya</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /Page Header -->

		<?php
		$id = $_SESSION['id'];
		$data = mysqli_query($koneksi,"select * from admin where admin_id='$id'");
		$d = mysqli_fetch_assoc($data);
		?>



		<div class="card mb-0">
			<div class="card-body">
				<div class="row">
					<div class="col-md-12">
						<div class="profile-view">
							<div class="profile-img-wrap">
								<div class="profile-img">
									<a href="#"><img alt="" src="../gambar/admin/<?php echo $d['admin_foto'] ?>"></a>
								</div>
							</div>
							<div class="profile-basic">
								<div class="row">
									<div class="col-md-5">
										<div class="profile-info-left">
											<h3 class="user-name m-t-0 mb-0"><?php echo $d['admin_nama'] ?></h3>
											<h6 class="text-muted">admin</h6>											
										</div>
									</div>
									<div class="col-md-7">
										<ul class="personal-info">
											<li>
												<div class="title">Kontak :</div>
												<div class="text"><a href=""><?php echo $d['admin_kontak'] ?></a></div>
											</li>
											<li>
												<div class="title">Email:</div>
												<div class="text"><a href=""><?php echo $d['admin_email'] ?></a></div>
											</li>											
											<li>
												<div class="title">Alamat :</div>
												<div class="text"><?php echo $d['admin_alamat'] ?></div>
											</li>
											<li>
												<div class="title">Jenis Kelamin:</div>
												<div class="text"><?php echo $d['admin_kelamin'] ?></div>
											</li>											
										</ul>
									</div>
								</div>
							</div>
							<div class="pro-edit"><a data-target="#adminEdit<?php echo $d['admin_id']; ?>" data-toggle="modal" class="edit-icon" href="#"><i class="fa fa-pencil"></i></a></div>

							<div id="adminEdit<?php echo $d['admin_id']; ?>" class="modal custom-modal fade" role="dialog">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">Edit admin Makna</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<form method="post" action="admin_update.php" enctype="multipart/form-data">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>Nama Lengkap</label>
															<input type="hidden" name="id" value="<?php echo $d['admin_id'] ?>">
															<input type="text" name="nama" class="form-control" value="<?php echo $d['admin_nama'] ?>" required="required" placeholder="Nama admin">
														</div>
													</div>							
													<div class="col-md-6">
														<div class="form-group">
															<label>Jenis Kelamin</label>
															<select class="form-control" name="kelamin" required="required">
																<option value="">--Pilih--</option>
																<option <?php if($d['admin_kelamin']=="Laki-Laki"){echo "selected='selected'"; } ?> value="Laki-Laki">Laki-Laki</option>
																<option <?php if($d['admin_kelamin']=="Perempuan"){echo "selected='selected'"; } ?>  value="Perempuan">Perempuan</option>
															</select>								
														</div>
													</div>
												</div>

												<div class="row">			
													<div class="col-md-6">
														<div class="form-group">
															<label>Email</label>
															<input class="form-control" type="email" value="<?php echo $d['admin_email'] ?>" name="email" required="required" placeholder="email">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Kontak</label>
															<input class="form-control" type="number" name="kontak" value="<?php echo $d['admin_kontak'] ?>" required="required" placeholder="Kontak/HP/Telepon">
														</div>
													</div>
												</div>

												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>Password</label>
															<input class="form-control" type="password" name="password" placeholder="Password">
															<p style="color:red;">* input jika akan diganti</p>
														</div>
													</div>							
													<div class="col-md-6">
														<div class="form-group">
															<label>Foto</label>
															<input class="form-control" type="file" name="foto">
															<p style="color:red;">* input jika akan diganti</p>
														</div>
													</div>
												</div>

												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label>Alamat</label>
															<textarea class="form-control" name="alamat" required="required"><?php echo $d['admin_alamat'] ?></textarea>
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


						</div>
					</div>
				</div>
			</div>
		</div>



	</div>
	<!-- /Page Wrapper -->
</div>

<?php include 'footer.php'; ?>