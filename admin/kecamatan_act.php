<?php

session_start();
if($_SESSION['status'] != "Admin"){
  header("location:../index.php");
}



 
include '../koneksi.php';
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$latitude = $_POST['latitude'];
$longtitude = $_POST['longtitude'];





$ekstensi_diperbolehkan	= array('png','jpg','jpeg');
$foto = $_FILES['foto']['name'];

if($foto!=""){
	$x = explode('.', $foto);
	$ekstensi = strtolower(end($x));

	$ukuran	= $_FILES['foto']['size'];
	$file_tmp = $_FILES['foto']['tmp_name'];	

	if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){

		move_uploaded_file($file_tmp, '../gambar/'.$foto);
		mysqli_query($koneksi,"insert into kecamatan values (NULL, '$nama','$alamat','$latitude','$longtitude','$foto')");
		header("location:kecamatan.php?alert=tambah");
	}else{
		header("location:kecamatan.php?alert=tambah");
	}

}else{
	mysqli_query($koneksi,"insert into kecamatan values (NULL, '$nama','$alamat','$latitude','$longtitude','no_image_xxxxx.png')");
		header("location:kecamatan.php?alert=tambah");
}


