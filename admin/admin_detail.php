<?php include 'header.php'; ?>

<!-- Page Wrapper -->
<div class="page-wrapper">

	<!-- Page Content -->
	<div class="content container-fluid">

		<!-- Page Header -->
		<div class="page-header">
			<div class="row">
				<div class="col-sm-12">
					<h3 class="page-title">Detail admin</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
						<li class="breadcrumb-item active">Detail admin</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /Page Header -->

		<?php
		$id = mysqli_real_escape_string($koneksi, $_GET['id']);
		$data = mysqli_query($koneksi,"select * from admin where admin_id='$id'");
		$d = mysqli_fetch_assoc($data);
		?>



		<div class="card mb-0">
			<div class="card-body">
				<div class="row">
					<div class="col-md-12">
						<div class="profile-view">
							<!-- <div class="profile-img-wrap">
								<div class="profile-img">
									<a href="#"><img alt="" src="../gambar/admin/<?php echo $d['admin_foto'] ?>"></a>
								</div>
							</div> -->
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
												<div class="title">Nama :</div>
												<div class="text"><a href=""><?php echo $d['admin_nama'] ?></a></div>
											</li>
											<li>
												<div class="title">Username:</div>
												<div class="text"><a href=""><?php echo $d['admin_username'] ?></a></div>
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
											<h5 class="modal-title">Edit admin</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<form method="post" action="admin_update.php" enctype="multipart/form-data">
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label>Nama Lengkap</label>
															<input type="hidden" name="id" value="<?php echo $d['admin_id'] ?>">
															<input type="text" name="nama" class="form-control" value="<?php echo $d['admin_nama'] ?>" required="required" placeholder="Nama admin">
														</div>
													</div>																			
												</div>

												<div class="row">																
													<div class="col-md-12">
														<div class="form-group">
															<label>Username</label>
															<input class="form-control" type="text" name="username" value="<?php echo $d['admin_username'] ?>" required="required" placeholder="Username">
														</div>
													</div>
												</div>

												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label>Password</label>
															<input class="form-control" type="password" name="password" placeholder="Password">
															<p style="color:red;">* input jika akan diganti</p>
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