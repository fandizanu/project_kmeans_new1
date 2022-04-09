<?php

session_start();
if($_SESSION['status'] != "Admin"){
  header("location:../index.php");
}



 
include '../koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$latitude = $_POST['latitude'];
$longtitude = $_POST['longtitude'];




$ekstensi_diperbolehkan	= array('png','jpg','jpeg');
$foto = $_FILES['foto']['name'];


if($foto != ""){

	$x = explode('.', $foto);
	$ekstensi = strtolower(end($x));

	$ukuran	= $_FILES['foto']['size'];
	$file_tmp = $_FILES['foto']['tmp_name'];	

	if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
		move_uploaded_file($file_tmp, '../gambar/'.$foto);
		mysqli_query($koneksi,"update kecamatan set kecamatan_nama='$nama', kecamatan_alamat='$alamat', kecamatan_latitude='$latitude', kecamatan_longtitude='$longtitude',kecamatan_foto='$foto' where kecamatan_id='$id'");
		header("location:kecamatan.php?alert=edit");
	}else{
		header("location:kecamatan.php?alert=gagal");
	}


}else{	
	mysqli_query($koneksi,"update kecamatan set kecamatan_nama='$nama', kecamatan_alamat='$alamat', kecamatan_latitude='$latitude', kecamatan_longtitude='$longtitude' where kecamatan_id='$id'");
		header("location:kecamatan.php?alert=edit");
}
