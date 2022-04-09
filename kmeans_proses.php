<?php 
include "header.php";

$cen1 = $_GET['centroid1'];
$cen2 = $_GET['centroid2'];
$cen3 = $_GET['centroid3'];
$tanaman = $_GET['tanaman'];
?>


<div class="page-wrapper" style="padding-top:3%; background-color:#ddffff">

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


		<?php 
		// $arr_kriteria = array();

		$kriteria = mysqli_query($koneksi,"select * from tanaman_kriteria, kriteria where tk_tanaman='$tanaman' and tk_kriteria=kriteria_id");
		$jumlah_kriteria_x = mysqli_num_rows($kriteria)+1;

		$kecamatan = mysqli_query($koneksi,"select * from kecamatan");
		$jumlah_kecamatan_x = mysqli_num_rows($kecamatan);

		$arr_kriteria[0] = array(
			"tk_kriteria" => 0,
			"kriteria_nama" => "JUMLAH kecamatan",
		);
		while($jk = mysqli_fetch_array($kriteria)){
			$arr_kriteria[$jk['tk_kriteria']] = array(
				"tk_kriteria" => $jk['tk_kriteria'],
				"kriteria_nama" => $jk['kriteria_nama'],
			);
		}
		?>



		<div class="row">
			<div class="col-sm-12">
				<div class="card mb-0">
					<div class="card-header">
						<h4 class="card-title mb-0">Proses Kmeans</h4>						
					</div>

					<!-- data -->
					<?php 
						// mysqli_query($koneksi,"delete from hasil");
					$jumlah_kriteria = mysqli_num_rows(mysqli_query($koneksi,"select * from tanaman_kriteria where tk_tanaman='$tanaman'"));
					?>

					<div class="card-body">
						<div class="table-responsive">
							<table id="example2" class="table table-bordered table-hover">
								<thead>
									<tr>									
										<th width="15%">Nama Kecamatan</th>
										<?php 
										$data = mysqli_query($koneksi,"select * from tanaman_kriteria, kriteria where tk_tanaman='$tanaman' and tk_kriteria=kriteria_id");	
										while($d=mysqli_fetch_array($data)){
											?>
											<th><?php echo $d['kriteria_nama']; ?></th>		
											<?php 
										}
										?>
									</tr>
								</thead>
								<tbody>
									<?php
									$arr = array();

									$data = mysqli_query($koneksi,"select * from kecamatan");		
									while($d=mysqli_fetch_array($data)){
										$id_a = $d['kecamatan_id'];
										?>
										<tr class="<?php if($cen1 == $id_a){ echo "bg-warning"; } ?> <?php if($cen2 == $id_a){ echo "bg-success"; } ?> <?php if($cen3 == $id_a){ echo "bg-info"; } ?>">
											<td><?php echo $d['kecamatan_nama'] ?> <?php if($cen1 == $id_a){ echo " (C1)"; } ?> <?php if($cen2 == $id_a){ echo " (C2)"; } ?> <?php if($cen3 == $id_a){ echo "  (C3)"; } ?></td>
											<?php 
											$arr_nilai = array();
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
												array_push($arr_nilai, $c['tn_nilai']);
											}
											?>
										</tr>
										<?php
										$arr[$id_a] = $arr_nilai;
										// array_push($arr, $arr_nilai);

										
									}
									?>
								</tbody>
							</table>
						</div>

						

						<h4 class="text-center">Tabel centroid (Pusat Cluster) untuk iterasi 1</h4>

						<div class="table-responsive">
							<table id="example2" class="table table-bordered table-hover">
								<thead>
									<tr>									
										<th width="15%">Centroid</th>
										<?php 
										$data = mysqli_query($koneksi,"select * from tanaman_kriteria, kriteria where tk_tanaman='$tanaman' and tk_kriteria=kriteria_id");	
										while($d=mysqli_fetch_array($data)){
											?>
											<th><?php echo $d['kriteria_nama']; ?></th>		
											<?php 
										}
										?>
									</tr>
								</thead>
								<tbody>
									<?php
									$data = mysqli_query($koneksi,"select * from kecamatan where kecamatan_id='$cen1' or kecamatan_id='$cen2' or kecamatan_id='$cen3'");		
									while($d=mysqli_fetch_array($data)){
										$id_a = $d['kecamatan_id'];
										?>
										<tr class="<?php if($cen1 == $id_a){ echo "bg-warning"; } ?> <?php if($cen2 == $id_a){ echo "bg-success"; } ?> <?php if($cen3 == $id_a){ echo "bg-info"; } ?>">
											<td><?php echo $d['kecamatan_nama'] ?> <?php if($cen1 == $id_a){ echo " (C1)"; } ?> <?php if($cen2 == $id_a){ echo " (C2)"; } ?> <?php if($cen3 == $id_a){ echo "  (C3)"; } ?></td>
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


						<hr>


						<h4 class="text-center">Iterasi 1</h4>
						<div class="table-responsive">
							<table class="table table-bordered text-center" border="1">
								<tr>
									<th>C1</th>
									<th>C2</th>
									<th>C3</th>
									<th>Jarak Terdekat</th>
									<th>Cluster</th>
								</tr>
								<?php 
								function sortByOrder($a, $b) {
									return $a['nilai'] - $b['nilai'];
								}

								function sortByCluster($a, $b) {
									// return $a['cluster'] - $b['cluster'];
									return strcasecmp($a['cluster'], $b['cluster']);
								}

								$arr_hasil_cluster = array();
								$urutan_cluster = array();
								$arr_cluster = array();

								// tampilkan data
								while($kec = mysqli_fetch_array($kecamatan)){
									$id_kecamatan = $kec['kecamatan_id'];

									$arr_jarak = array();
									?>
									<tr>
										<td>
											<?php 
											$hasil_c1 = 0;
											for($b = 0; $b < count($arr[$id_kecamatan]); $b++){
												$c = $arr[$id_kecamatan][$b];
												$nilai_cent1 = $arr[$cen1][$b];
												$kurang = $c-$nilai_cent1;
												$pangkat = pow($kurang, 2);
												$hasil_c1 += $pangkat;
											}
											$hasil = sqrt($hasil_c1);
											echo $hasil;

											$arr_x['cluster'] = "C1";
											$arr_x['nilai'] = $hasil;
											array_push($arr_jarak,$arr_x);

											// $arr_cluster[$id_kecamatan]['C1'] = $hasil;
											?>
										</td>
										<td>
											<?php 
											$hasil_c2 = 0;
											for($b = 0; $b < count($arr[$id_kecamatan]); $b++){
												$c = $arr[$id_kecamatan][$b];
												$nilai_cent2 = $arr[$cen2][$b];
												$kurang = $c-$nilai_cent2;
												$pangkat = pow($kurang, 2);
												$hasil_c2 += $pangkat;
											}
											$hasil = sqrt($hasil_c2);
											echo $hasil;

											$arr_x['cluster'] = "C2";
											$arr_x['nilai'] = $hasil;
											array_push($arr_jarak,$arr_x);
											

											// $arr_cluster[$id_kecamatan]['C2'] = $hasil;
											?>
										</td>
										<td>
											<?php 
											$hasil_c3 = 0;
											for($b = 0; $b < count($arr[$id_kecamatan]); $b++){
												$c = $arr[$id_kecamatan][$b];
												$nilai_cent3 = $arr[$cen3][$b];
												$kurang = $c-$nilai_cent3;
												$pangkat = pow($kurang, 2);
												$hasil_c3 += $pangkat;
											}
											$hasil = sqrt($hasil_c3);
											echo $hasil;

											$arr_x['cluster'] = "C3";
											$arr_x['nilai'] = $hasil;
											array_push($arr_jarak,$arr_x);


											// $arr_cluster[$id_kecamatan]['C3'] = $hasil;
											?>
										</td>
										<?php 
										// sorting jarak terdekat
										usort($arr_jarak, 'sortByOrder');
										?>
										<td>
											<?php echo $arr_jarak[0]['nilai']; ?>
										</td>
										<td>
											<?php 
											echo $arr_jarak[0]['cluster']; 

											$x = array(
												'kecamatan' => $id_kecamatan,
												'cluster_terdekat' => $arr_jarak[0]['cluster'],
											);
											// $arr_cluster['cluster_terdekat'] = $arr_jarak[0]['cluster'];
											array_push($arr_cluster, $x);
											?>
										</td>
									</tr>
									<?php 
									$terdekat = $arr_jarak[0]['cluster'];
									array_push($urutan_cluster, $terdekat);
								} 
								?>
								<tr>
									
								</tr>
							</table>
						</div>  

						<?php array_push($arr_hasil_cluster, $urutan_cluster); ?>

						<hr>
						

						<?php 
						$arr_centroid_selanjutnya = array();

						$rata_c1 = 0;
						$total_c1 = 0;
						$jumlah_c1 = 0; 
						$jumlah_c2 = 0; 
						$jumlah_c3 = 0; 

						$arr_c1 = array();
						$arr_c2 = array();
						$arr_c3 = array();

						$arr_c1_fix = array();
						$arr_c2_fix = array();
						$arr_c3_fix = array();

						for($a = 0; $a < count($arr_cluster); $a++){
							$id_kecamatan = $arr_cluster[$a]['kecamatan'];
							$cluster_terdekat = $arr_cluster[$a]['cluster_terdekat'];

							for($b = 0; $b < count($arr[$id_kecamatan]); $b++){
								$arr_c1[$b] = 0;
								$arr_c2[$b] = 0;
								$arr_c3[$b] = 0;
							}

							if($cluster_terdekat == "C1"){
								$jumlah_c1++;
							}else if($cluster_terdekat == "C2"){
								$jumlah_c2++;

							}else if($cluster_terdekat == "C3"){
								$jumlah_c3++;

							}
							

						}


						for($a = 0; $a < count($arr_cluster); $a++){
							$id_kecamatan = $arr_cluster[$a]['kecamatan'];
							$cluster_terdekat = $arr_cluster[$a]['cluster_terdekat'];

							for($b = 0; $b < count($arr[$id_kecamatan]); $b++){
								if($cluster_terdekat == "C1"){
									$arr_c1[$b] += $arr[$id_kecamatan][$b];
								}else if($cluster_terdekat == "C2"){
									$arr_c2[$b] += $arr[$id_kecamatan][$b];

								}else if($cluster_terdekat == "C3"){
									$arr_c3[$b] += $arr[$id_kecamatan][$b];

								}
							}
							
						}

						for($a = 0; $a < count($arr_cluster); $a++){
							$id_kecamatan = $arr_cluster[$a]['kecamatan'];
							$cluster_terdekat = $arr_cluster[$a]['cluster_terdekat'];

							for($b = 0; $b < count($arr[$id_kecamatan]); $b++){
								if($cluster_terdekat == "C1"){
									$arr_c1_fix[$b] =  $arr_c1[$b]/$jumlah_c1;
								}else if($cluster_terdekat == "C2"){
									$arr_c2_fix[$b] =  $arr_c2[$b]/$jumlah_c2;

								}else if($cluster_terdekat == "C3"){
									$arr_c3_fix[$b] =  $arr_c3[$b]/$jumlah_c3;

								}
							}
							
						}

						$table_centroid = array();
						array_push($table_centroid, $arr_c1_fix);
						array_push($table_centroid, $arr_c2_fix);
						array_push($table_centroid, $arr_c3_fix);
						?>



						<h4 class="text-center">Tabel centroid (Pusat Cluster) untuk iterasi 2</h4>

						<div class="table-responsive">
							<table id="example2" class="table table-bordered table-hover">
								<thead>
									<tr>									
										<th width="15%">Centroid</th>
										<?php 
										$data = mysqli_query($koneksi,"select * from tanaman_kriteria, kriteria where tk_tanaman='$tanaman' and tk_kriteria=kriteria_id");	
										while($d=mysqli_fetch_array($data)){
											?>
											<th><?php echo $d['kriteria_nama']; ?></th>		
											<?php 
										}
										?>
									</tr>
								</thead>
								<tbody>
									<?php
									$a = 0;
									$data = mysqli_query($koneksi,"select * from kecamatan where kecamatan_id='$cen1' or kecamatan_id='$cen2' or kecamatan_id='$cen3'");		
									while($d=mysqli_fetch_array($data)){
										$id_a = $d['kecamatan_id'];
										?>
										<tr class="<?php if($cen1 == $id_a){ echo "bg-warning"; } ?> <?php if($cen2 == $id_a){ echo "bg-success"; } ?> <?php if($cen3 == $id_a){ echo "bg-info"; } ?>">
											<td><?php echo $d['kecamatan_nama'] ?> <?php if($cen1 == $id_a){ echo " (C1)"; } ?> <?php if($cen2 == $id_a){ echo " (C2)"; } ?> <?php if($cen3 == $id_a){ echo "  (C3)"; } ?></td>
											<?php 
											for($b = 0; $b < count($table_centroid[$a]); $b++){ 
												?>
												<td><?php echo $table_centroid[$a][$b]; ?></td>
												<?php
											}
											?>
										</tr>
										<?php
										$a++;
									}
									?>
								</tbody>
							</table>
						</div>


						<hr>


						<h4 class="text-center">Iterasi 2</h4>
						<div class="table-responsive">
							<table class="table table-bordered text-center" border="1">
								<tr>
									<th>C1</th>
									<th>C2</th>
									<th>C3</th>
									<th>Jarak Terdekat</th>
									<th>Cluster</th>
								</tr>
								<?php 
								

								$urutan_cluster = array();
								$arr_cluster = array();

								// tampilkan data
								$kecamatan = mysqli_query($koneksi,"select * from kecamatan");
								while($kec = mysqli_fetch_array($kecamatan)){
									$id_kecamatan = $kec['kecamatan_id'];

									$arr_jarak = array();
									?>
									<tr>
										<td>
											<?php 
											$hasil_c1 = 0;
											for($b = 0; $b < count($arr[$id_kecamatan]); $b++){
												$c = $arr[$id_kecamatan][$b];
												$nilai_cent1 = $table_centroid[0][$b];
												$kurang = $c-$nilai_cent1;
												$pangkat = pow($kurang, 2);
												$hasil_c1 += $pangkat;
											}
											$hasil = sqrt($hasil_c1);
											echo $hasil;

											$arr_x['cluster'] = "C1";
											$arr_x['nilai'] = $hasil;
											array_push($arr_jarak,$arr_x);

											// $arr_cluster[$id_kecamatan]['C1'] = $hasil;
											?>
										</td>
										<td>
											<?php 
											$hasil_c2 = 0;
											for($b = 0; $b < count($arr[$id_kecamatan]); $b++){
												$c = $arr[$id_kecamatan][$b];
												$nilai_cent2 = $table_centroid[1][$b];
												$kurang = $c-$nilai_cent2;
												$pangkat = pow($kurang, 2);
												$hasil_c2 += $pangkat;
											}
											$hasil = sqrt($hasil_c2);
											echo $hasil;

											$arr_x['cluster'] = "C2";
											$arr_x['nilai'] = $hasil;
											array_push($arr_jarak,$arr_x);
											

											// $arr_cluster[$id_kecamatan]['C2'] = $hasil;
											?>
										</td>
										<td>
											<?php 
											$hasil_c3 = 0;
											for($b = 0; $b < count($arr[$id_kecamatan]); $b++){
												$c = $arr[$id_kecamatan][$b];
												$nilai_cent3 = $table_centroid[2][$b];
												$kurang = $c-$nilai_cent3;
												$pangkat = pow($kurang, 2);
												$hasil_c3 += $pangkat;
											}
											$hasil = sqrt($hasil_c3);
											echo $hasil;

											$arr_x['cluster'] = "C3";
											$arr_x['nilai'] = $hasil;
											array_push($arr_jarak,$arr_x);


											// $arr_cluster[$id_kecamatan]['C3'] = $hasil;
											?>
										</td>
										<?php 
										// sorting jarak terdekat
										usort($arr_jarak, 'sortByOrder');
										?>
										<td>
											<?php echo $arr_jarak[0]['nilai']; ?>
										</td>
										<td>
											<?php 
											echo $arr_jarak[0]['cluster']; 

											$x = array(
												'kecamatan' => $id_kecamatan,
												'cluster_terdekat' => $arr_jarak[0]['cluster'],
											);
											// $arr_cluster['cluster_terdekat'] = $arr_jarak[0]['cluster'];
											array_push($arr_cluster, $x);
											?>
										</td>
									</tr>
									<?php 
									$terdekat = $arr_jarak[0]['cluster'];
									array_push($urutan_cluster, $terdekat);
								} 
								?>
								<tr>
									
								</tr>
							</table>
						</div>  

						<?php array_push($arr_hasil_cluster, $urutan_cluster); ?>





						<?php 

						if($urutan_cluster == $arr_hasil_cluster[0]){
							// echo "sama";
						}else{
							// echo "tidak";
							hitung(2);
						}
						?>



						<?php 
						function hitung($iterasi_ke){
							global $koneksi;
							global $tanaman;
							global $arr_cluster;
							global $arr;
							global $cen1;
							global $cen2;
							global $cen3;
							global $urutan_cluster;
							global $arr_hasil_cluster;

							?>

							<hr>

							<?php 
							$arr_centroid_selanjutnya = array();

							$rata_c1 = 0;
							$total_c1 = 0;
							$jumlah_c1 = 0; 
							$jumlah_c2 = 0; 
							$jumlah_c3 = 0; 

							$arr_c1 = array();
							$arr_c2 = array();
							$arr_c3 = array();

							$arr_c1_fix = array();
							$arr_c2_fix = array();
							$arr_c3_fix = array();

							for($a = 0; $a < count($arr_cluster); $a++){
								$id_kecamatan = $arr_cluster[$a]['kecamatan'];
								$cluster_terdekat = $arr_cluster[$a]['cluster_terdekat'];

								for($b = 0; $b < count($arr[$id_kecamatan]); $b++){
									$arr_c1[$b] = 0;
									$arr_c2[$b] = 0;
									$arr_c3[$b] = 0;
								}

								if($cluster_terdekat == "C1"){
									$jumlah_c1++;
								}else if($cluster_terdekat == "C2"){
									$jumlah_c2++;

								}else if($cluster_terdekat == "C3"){
									$jumlah_c3++;

								}


							}


							for($a = 0; $a < count($arr_cluster); $a++){
								$id_kecamatan = $arr_cluster[$a]['kecamatan'];
								$cluster_terdekat = $arr_cluster[$a]['cluster_terdekat'];

								for($b = 0; $b < count($arr[$id_kecamatan]); $b++){
									if($cluster_terdekat == "C1"){
										$arr_c1[$b] += $arr[$id_kecamatan][$b];
									}else if($cluster_terdekat == "C2"){
										$arr_c2[$b] += $arr[$id_kecamatan][$b];

									}else if($cluster_terdekat == "C3"){
										$arr_c3[$b] += $arr[$id_kecamatan][$b];

									}
								}

							}

							for($a = 0; $a < count($arr_cluster); $a++){
								$id_kecamatan = $arr_cluster[$a]['kecamatan'];
								$cluster_terdekat = $arr_cluster[$a]['cluster_terdekat'];

								for($b = 0; $b < count($arr[$id_kecamatan]); $b++){
									if($cluster_terdekat == "C1"){
										$arr_c1_fix[$b] =  $arr_c1[$b]/$jumlah_c1;
									}else if($cluster_terdekat == "C2"){
										$arr_c2_fix[$b] =  $arr_c2[$b]/$jumlah_c2;

									}else if($cluster_terdekat == "C3"){
										$arr_c3_fix[$b] =  $arr_c3[$b]/$jumlah_c3;

									}
								}

							}

							$table_centroid = array();
							array_push($table_centroid, $arr_c1_fix);
							array_push($table_centroid, $arr_c2_fix);
							array_push($table_centroid, $arr_c3_fix);
							?>

							<h4 class="text-center">Tabel centroid (Pusat Cluster) untuk iterasi <?php echo $iterasi_ke+1 ?></h4>

							<div class="table-responsive">
								<table id="example2" class="table table-bordered table-hover">
									<thead>
										<tr>									
											<th width="15%">Centroid</th>
											<?php 
											$data = mysqli_query($koneksi,"select * from tanaman_kriteria, kriteria where tk_tanaman='$tanaman' and tk_kriteria=kriteria_id");	
											while($d=mysqli_fetch_array($data)){
												?>
												<th><?php echo $d['kriteria_nama']; ?></th>		
												<?php 
											}
											?>
										</tr>
									</thead>
									<tbody>
										<?php
										$a = 0;
										$data = mysqli_query($koneksi,"select * from kecamatan where kecamatan_id='$cen1' or kecamatan_id='$cen2' or kecamatan_id='$cen3'");		
										while($d=mysqli_fetch_array($data)){
											$id_a = $d['kecamatan_id'];
											?>
											<tr class="<?php if($cen1 == $id_a){ echo "bg-warning"; } ?> <?php if($cen2 == $id_a){ echo "bg-success"; } ?> <?php if($cen3 == $id_a){ echo "bg-info"; } ?>">
												<td><?php echo $d['kecamatan_nama'] ?> <?php if($cen1 == $id_a){ echo " (C1)"; } ?> <?php if($cen2 == $id_a){ echo " (C2)"; } ?> <?php if($cen3 == $id_a){ echo "  (C3)"; } ?></td>
												<?php 
												for($b = 0; $b < count($table_centroid[$a]); $b++){ 
													?>
													<td><?php echo $table_centroid[$a][$b]; ?></td>
													<?php
												}
												?>
											</tr>
											<?php
											$a++;
										}
										?>
									</tbody>
								</table>
							</div>


							<hr>


							<h4 class="text-center">Iterasi <?php echo $iterasi_ke+1 ?></h4>
							<div class="table-responsive">
								<table class="table table-bordered text-center" border="1">
									<tr>
										<th>C1</th>
										<th>C2</th>
										<th>C3</th>
										<th>Jarak Terdekat</th>
										<th>Cluster</th>
									</tr>
									<?php 


									$urutan_cluster = array();
									$arr_cluster = array();

								// tampilkan data
									$kecamatan = mysqli_query($koneksi,"select * from kecamatan");
									while($kec = mysqli_fetch_array($kecamatan)){
										$id_kecamatan = $kec['kecamatan_id'];

										$arr_jarak = array();
										?>
										<tr>
											<td>
												<?php 
												$hasil_c1 = 0;
												for($b = 0; $b < count($arr[$id_kecamatan]); $b++){
													$c = $arr[$id_kecamatan][$b];
													$nilai_cent1 = $table_centroid[0][$b];
													$kurang = $c-$nilai_cent1;
													$pangkat = pow($kurang, 2);
													$hasil_c1 += $pangkat;
												}
												$hasil = sqrt($hasil_c1);
												echo $hasil;

												$arr_x['cluster'] = "C1";
												$arr_x['nilai'] = $hasil;
												array_push($arr_jarak,$arr_x);

											// $arr_cluster[$id_kecamatan]['C1'] = $hasil;
												?>
											</td>
											<td>
												<?php 
												$hasil_c2 = 0;
												for($b = 0; $b < count($arr[$id_kecamatan]); $b++){
													$c = $arr[$id_kecamatan][$b];
													$nilai_cent2 = $table_centroid[1][$b];
													$kurang = $c-$nilai_cent2;
													$pangkat = pow($kurang, 2);
													$hasil_c2 += $pangkat;
												}
												$hasil = sqrt($hasil_c2);
												echo $hasil;

												$arr_x['cluster'] = "C2";
												$arr_x['nilai'] = $hasil;
												array_push($arr_jarak,$arr_x);


											// $arr_cluster[$id_kecamatan]['C2'] = $hasil;
												?>
											</td>
											<td>
												<?php 
												$hasil_c3 = 0;
												for($b = 0; $b < count($arr[$id_kecamatan]); $b++){
													$c = $arr[$id_kecamatan][$b];
													$nilai_cent3 = $table_centroid[2][$b];
													$kurang = $c-$nilai_cent3;
													$pangkat = pow($kurang, 2);
													$hasil_c3 += $pangkat;
												}
												$hasil = sqrt($hasil_c3);
												echo $hasil;

												$arr_x['cluster'] = "C3";
												$arr_x['nilai'] = $hasil;
												array_push($arr_jarak,$arr_x);


											// $arr_cluster[$id_kecamatan]['C3'] = $hasil;
												?>
											</td>
											<?php 
										// sorting jarak terdekat
											usort($arr_jarak, 'sortByOrder');
											?>
											<td>
												<?php echo $arr_jarak[0]['nilai']; ?>
											</td>
											<td>
												<?php 
												echo $arr_jarak[0]['cluster']; 

												$x = array(
													'kecamatan' => $id_kecamatan,
													'cluster_terdekat' => $arr_jarak[0]['cluster'],
												);
											// $arr_cluster['cluster_terdekat'] = $arr_jarak[0]['cluster'];
												array_push($arr_cluster, $x);
												?>
											</td>
										</tr>
										<?php 
										$terdekat = $arr_jarak[0]['cluster'];
										array_push($urutan_cluster, $terdekat);
									} 
									?>
									<tr>

									</tr>
								</table>
							</div>  

							<?php array_push($arr_hasil_cluster, $urutan_cluster); ?>


							<hr>


							<?php 
							// $x = $iterasi_ke-1;
							$sebelumnya = $iterasi_ke-1;
							$selanjutnya = $iterasi_ke+1;
							if($urutan_cluster == $arr_hasil_cluster[$sebelumnya]){
								// echo "sama";
							}else{
								// echo "tidak";
								hitung($selanjutnya);
							}



						}
						?>

						<br>
						<br>
						<br>
						<br>
						<hr>
						<br>
						<br>

						<?php 
						$arr_hasil_akhir = array();
						?>



						<h4 class="text-center">HASIL</h4>
						<div class="table-responsive">
							<table class="table table-bordered text-center" border="1">
								<tr>
									<th>KECAMATAN</th>
									<th>C1</th>
									<th>C2</th>
									<th>C3</th>
									<th>Jarak Terdekat</th>
									<th>Cluster</th>
								</tr>
								<?php 
								$urutan_cluster = array();
								$arr_cluster = array();

								// tampilkan data
								$kecamatan = mysqli_query($koneksi,"select * from kecamatan");
								while($kec = mysqli_fetch_array($kecamatan)){
									$id_kecamatan = $kec['kecamatan_id'];

									$arr_jarak = array();
									?>
									<tr>
										<td><?php echo $kec['kecamatan_nama'] ?></td>
										<td>
											<?php 
											$hasil_c1 = 0;
											for($b = 0; $b < count($arr[$id_kecamatan]); $b++){
												$c = $arr[$id_kecamatan][$b];
												$nilai_cent1 = $table_centroid[0][$b];
												$kurang = $c-$nilai_cent1;
												$pangkat = pow($kurang, 2);
												$hasil_c1 += $pangkat;
											}
											$hasil = sqrt($hasil_c1);
											echo $hasil;

											$arr_x['cluster'] = "C1";
											$arr_x['nilai'] = $hasil;
											array_push($arr_jarak,$arr_x);

											// $arr_cluster[$id_kecamatan]['C1'] = $hasil;
											?>
										</td>
										<td>
											<?php 
											$hasil_c2 = 0;
											for($b = 0; $b < count($arr[$id_kecamatan]); $b++){
												$c = $arr[$id_kecamatan][$b];
												$nilai_cent2 = $table_centroid[1][$b];
												$kurang = $c-$nilai_cent2;
												$pangkat = pow($kurang, 2);
												$hasil_c2 += $pangkat;
											}
											$hasil = sqrt($hasil_c2);
											echo $hasil;

											$arr_x['cluster'] = "C2";
											$arr_x['nilai'] = $hasil;
											array_push($arr_jarak,$arr_x);


											// $arr_cluster[$id_kecamatan]['C2'] = $hasil;
											?>
										</td>
										<td>
											<?php 
											$hasil_c3 = 0;
											for($b = 0; $b < count($arr[$id_kecamatan]); $b++){
												$c = $arr[$id_kecamatan][$b];
												$nilai_cent3 = $table_centroid[2][$b];
												$kurang = $c-$nilai_cent3;
												$pangkat = pow($kurang, 2);
												$hasil_c3 += $pangkat;
											}
											$hasil = sqrt($hasil_c3);
											echo $hasil;

											$arr_x['cluster'] = "C3";
											$arr_x['nilai'] = $hasil;
											array_push($arr_jarak,$arr_x);


											// $arr_cluster[$id_kecamatan]['C3'] = $hasil;
											?>
										</td>
										<?php 
										// sorting jarak terdekat
										usort($arr_jarak, 'sortByOrder');
										?>
										<td>
											<?php echo $arr_jarak[0]['nilai']; ?>
										</td>
										<td>
											<?php 
											echo $arr_jarak[0]['cluster']; 

											$x = array(
												'kecamatan' => $id_kecamatan,
												'cluster_terdekat' => $arr_jarak[0]['cluster'],
											);
											// $arr_cluster['cluster_terdekat'] = $arr_jarak[0]['cluster'];
											array_push($arr_cluster, $x);
											?>
										</td>
									</tr>
									<?php 
									$terdekat = $arr_jarak[0]['cluster'];
									array_push($urutan_cluster, $terdekat);
									$xxx['kecamatan_id'] = $kec['kecamatan_id'];
									$xxx['kecamatan_nama'] = $kec['kecamatan_nama'];
									$xxx['cluster'] = $terdekat;
									array_push($arr_hasil_akhir, $xxx);
								} 
								?>
							</table>
						</div>  

						<?php 
						usort($arr_hasil_akhir, 'sortByCluster');
						?>


						<br>
						<br>
						<br>
						<hr>
						<br>
						<br>
						
						







						<?php 
						// print_r($arr_hasil_akhir); 

						?>












						
					</div>
				</div>
			</div>
		</div>


	</div>
</div>
<div class="hasil" style="padding-bottom:3%; padding-left:30px;padding-right:30px">
<h4 class="text-center">HASIL AKHIR (DIURUTKAN)</h4>
						<div class="table-responsive">
							<table class="table table-bordered text-center" border="1">
								<tr>
									<th>KECAMATAN</th>
									<th>CLUSTER</th>
								</tr>
								<?php 
								for($a = 0; $a < count($arr_hasil_akhir); $a++){
									?>
									<tr>
										<td><?php echo $arr_hasil_akhir[$a]['kecamatan_nama'] ?></td>
										<td><?php echo $arr_hasil_akhir[$a]['cluster'] ?></td>
									</tr>
									<?php
								}
								?>
							</table>
</div>

	</div>  


<!-- /Page Wrapper -->
<?php include 'footer.php' ?>