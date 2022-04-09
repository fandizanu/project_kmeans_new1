<?php 
include "header.php";
$tanaman = $_GET['id'];
?>


<div class="page-wrapper" style="padding:3% 0; background-color: #ddffff; ">

	<!-- Page Content -->
	<div class="content container-fluid">

		<!-- Page Header -->
		<div class="page-header">
			<div class="row align-items-center">
				<div class="col">
					<h3 class="page-title">Proses Kmeans Clustering</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
						<li class="breadcrumb-item active">Proses Kmeans Clustering</li>
					</ul>
				</div>				
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">
				<div class="card mb-0">
					<div class="card-header">
						<h4 class="card-title mb-0">Proses Kmeans</h4>						
					</div>

					<div class="card-body">
						<div class="table-responsive">
							<table id="example2" class="table table-bordered table-hover">
								<thead>
									<tr>									
										<th width="15%">Nama Kecamatan</th>										
										<?php 
										$idtanaman = $_GET['id'];
										$kriteria = mysqli_query($koneksi,"select * from tanaman_kriteria, kriteria where tk_tanaman='$tanaman' and tk_kriteria=kriteria_id");
										while($d=mysqli_fetch_array($kriteria)){
											?>
											<th><?php echo $d['kriteria_nama']; ?></th>		
											<?php 
										}
										?>
									</tr>
								</thead>
								<tbody>
									<?php
									$data = mysqli_query($koneksi,"select * from kecamatan");		
									while($d=mysqli_fetch_array($data)){
										$id_a = $d['kecamatan_id'];
										?>
										<tr>
											<td><?php echo $d['kecamatan_nama'] ?></td>
											<?php 
											$kriteria = mysqli_query($koneksi,"select * from tanaman_kriteria, kriteria where tk_tanaman='$tanaman' and tk_kriteria=kriteria_id");		
											while($k=mysqli_fetch_array($kriteria)){
												$id_kriteria = $k['tk_kriteria'];
												$cek = mysqli_query($koneksi,"select * from tanaman_nilai where tn_tanaman='$tanaman' and tn_kecamatan='$id_a' and tn_kriteria='$id_kriteria'");
												$c = mysqli_fetch_assoc($cek);
												?>
												<td width="9%">
													<?php 
													echo $c['tn_nilai'];
													?>
												</td>		
												<?php 
											}
											?>
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
</div>


<!-- /Page Wrapper -->
<?php include 'footer.php' ?>