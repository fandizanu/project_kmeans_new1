<?php 
include '../koneksi.php';
$tanaman = $_POST['tanaman'];
$kecamatan = $_POST['kecamatan'];
$nilai = $_POST['nilai'];
$kriteria = $_POST['kriteria'];


$cek = mysqli_query($koneksi,"select * from tanaman_nilai where tn_tanaman='$tanaman' and tn_kecamatan='$kecamatan'");
if(mysqli_num_rows($cek)>0){
    
	header("location:tanaman_nilai.php?id=$tanaman&alert=gagal");
}else{
	for($i=0;$i<count($nilai);$i++){
		mysqli_query($koneksi,"insert into tanaman_nilai values(NULL,'$tanaman','$kecamatan','$kriteria[$i]','$nilai[$i]')");
	}
	header("location:tanaman_nilai.php?id=$tanaman");
}
