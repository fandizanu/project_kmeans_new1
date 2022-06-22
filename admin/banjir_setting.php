<?php
include '../koneksi.php';
$tanaman = $_POST['tanaman'];
$kriteria = $_POST['kriteria'];

mysqli_query($koneksi,"delete from tanaman_kriteria where tk_tanaman='$tanaman'");
mysqli_query($koneksi,"delete from tanaman_nilai where tn_tanaman='$tanaman'");
for($i=0; $i<count($kriteria); $i++){
	mysqli_query($koneksi,"insert into tanaman_kriteria values(NULL,'$tanaman','$kriteria[$i]')");

}
header("location:banjir.php?alert=setting");
