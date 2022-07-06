<?php include 'header.php'; ?>

<!-- Page Wrapper -->
<div class="page-wrapper" style="padding: 3% 0; background-color: #fff">

	<!-- Page Content -->
	<div class="content container-fluid">

		<!-- Page Header -->
		<div class="page-header">
			<div class="row align-items-center">
				<div class="col">
					<h3 class="page-title">Pilih Pusat Cluster</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
						<li class="breadcrumb-item active">Pilih Pusat Cluster</li>
					</ul>
				</div>				
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">
				<div class="card mb-0">
					<div class="card-header">
						<h4 class="card-title mb-0">Pilih Pusat Cluster</h4>
						
					</div>
					<div class="card-body">

						<form method="get" action="kmeans_proses.php">
								
								<div class="table-responsive">
									<table class="table table-bordered">
										
										<tr>
											<th width="10%" class="bg-primary">Centroid 1</th>
											<td width="15%">
												<label>Kecamatan</label>
												<input type="hidden" name="tanaman" value="<?php echo $_GET['id'] ?>">
												<select class="form-control pilih-desa1" name="centroid1" required="required">													
													<?php
													$data = mysqli_query($koneksi,"select * from kecamatan where kecamatan_id = 21");		
													while($d=mysqli_fetch_array($data)){
														?>
														<option value="<?php echo $d['kecamatan_id'] ?>"><?php echo $d['kecamatan_nama'] ?></option>
														<?php
													}
													?>
												</select>
											</td>

										</tr>
										<tr>
											<th width="10%"  class="bg-primary">Centroid 2</th>
											<td width="15%">
												<label>Kecamatan</label>
												<select class="form-control pilih-desa2" name="centroid2" required="required">													
													<?php
													$data = mysqli_query($koneksi,"select * from kecamatan where kecamatan_id = 23");		
													while($d=mysqli_fetch_array($data)){
														?>
														<option value="<?php echo $d['kecamatan_id'] ?>"><?php echo $d['kecamatan_nama'] ?></option>
														<?php
													}
													?>
												</select>
											</td>
										
										</tr>

										<tr>
											<th width="10%"  class="bg-primary">Centroid 3</th>
											<td width="15%">
												<label>kecamatan</label>
												<select class="form-control pilih-desa3" name="centroid3" required="required">													
													<?php
													$data = mysqli_query($koneksi,"select * from kecamatan where kecamatan_id = 25");		
													while($d=mysqli_fetch_array($data)){
														?>
														<option value="<?php echo $d['kecamatan_id'] ?>"><?php echo $d['kecamatan_nama'] ?></option>
														<?php
													}
													?>
												</select>
											</td>											
										</tr>

									</table>
								</div>
								<div class="d-flex justify-content-center">
									<input type="submit" value="HITUNG!" class="btn btn-primary" > 
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