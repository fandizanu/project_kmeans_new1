<?php 
include '../koneksi.php';
$kecamatan = $_POST['kecamatan'];

?>

<table border="1">
	<thead>
		<tr>
			<td>JUMLAH PENGGUNA</td>
			<?php
			$no=1;  
			$kriteria = mysqli_query($koneksi,"select * from kriteria");
			while($k = mysqli_fetch_array($kriteria)){
				?>
				<td> <?php  echo $k['kriteria_nama']; ?></td>
				<?php
			}
			?> 
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><?php echo $jumlah_pemakai ?></td>
			<?php
			$kriteria = mysqli_query($koneksi,"select * from kriteria");
			while($k = mysqli_fetch_array($kriteria)){
				$id_k = $k['kriteria_id'];
				$penilaian = mysqli_query($koneksi,"select avg(penilaian_nilai) as jumlah_nilai from penilaian,pemakai where penilaian_kriteria='$id_k' and pemakai_desa='$desa' and pemakai_tahun='$tahun' and penilaian_pengguna=pemakai_id");
				$pn = mysqli_fetch_assoc($penilaian);
				?>
				<td> <?php echo round($pn['jumlah_nilai']); ?></td>
				<?php
			}
			?> 
		</tr>
	</tbody>
</table>
<?php


?>
