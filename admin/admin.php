<?php include 'header.php'; ?>

<!-- Page Wrapper -->
<div class="page-wrapper">

	<!-- Page Content -->
	<div class="content container-fluid">

		<!-- Page Header -->
		<div class="page-header">
			<div class="row align-items-center">
				<div class="col">
					<h3 class="page-title">Admin</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
						<li class="breadcrumb-item active">Admin</li>
					</ul>
				</div>
				<div class="col-auto float-right ml-auto">
					<a href="#" class="btn add-btn" data-toggle="modal" data-target="#adminTambah"><i class="fa fa-plus"></i> Tambah</a>
				</div>
			</div>
		</div>


		<!-- Page Content -->
		<div class="content container-fluid">									

			<div class="row staff-grid-row">
				<?php
				$data = mysqli_query($koneksi,"select * from admin");
				while($d = mysqli_fetch_array($data)){
					?>
					<div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
						<div class="profile-widget">
							<div class="profile-img">								
								<a href="admin_detail.php?id=<?php echo $d['admin_id'] ?>" class="avatar"><img src="../gambar/admin/<?php echo $d['admin_foto'] ?>" alt=""></a>
							</div>
							<?php 
							if($d['admin_id'] !="1"){
								?>
								<div class="dropdown profile-action">
									<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#" data-toggle="modal" data-target="#adminEdit<?php echo $d['admin_id']; ?>"><i class="fa fa-pencil m-r-5"></i> Edit</a>
										<a class="dropdown-item" href="admin_hapus.php?id=<?php echo $d['admin_id']; ?>"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
									</div>
								</div>
								<?php
							}else{

							}
							?>
							<h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="admin_detail.php?id=<?php echo $d['admin_id'] ?>"><?php echo $d['admin_nama'] ?></a></h4>
							<div class="small text-muted">Admin</div>
						</div>
					</div>


					<div id="adminEdit<?php echo $d['admin_id']; ?>" class="modal custom-modal fade" role="dialog">
						<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Edit Admin</h5>
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


					<?php 
				}

				?>


			</div>
		</div>
		<!-- /Page Content -->

		
	</div>
	<!-- /Page Content -->

	<!-- Add Expense Modal -->
	<div id="adminTambah" class="modal custom-modal fade" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Tambah Admin</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="post" action="admin_act.php" enctype="multipart/form-data">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Nama Lengkap</label>
									<input type="text" name="nama" class="form-control" required="required" placeholder="Nama admin">
								</div>
							</div>
						</div>

						<div class="row">										
							<div class="col-md-12">
								<div class="form-group">
									<label>Username</label>
									<input class="form-control" type="text" name="username" required="required" placeholder="Username">
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Password</label>
									<input class="form-control" type="password" name="password" required="required" placeholder="Password">
								</div>
							</div>							
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Foto</label>
									<input class="form-control" type="file" name="foto">
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