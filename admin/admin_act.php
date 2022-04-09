<?php 

session_start();
if($_SESSION['status'] != "Admin"){
  header("location:../index.php");
}




include '../koneksi.php';
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = md5($_POST['password']);



if($_FILES['foto']['name'] == ""){
	mysqli_query($koneksi,"insert into admin values(NULL,'$nama','$username','$password','admin_default.jpg')");
	header("location:admin.php");
}else{
	$rand = rand();
	$allowed =  array('gif','png','jpg','jpeg');
	$filename = $_FILES['foto']['name'];
	$ext = pathinfo($filename, PATHINFO_EXTENSION);
	if(!in_array($ext,$allowed) ) {
		header("location:admin.php?alert=gagal");
	}else{
		move_uploaded_file($_FILES['foto']['tmp_name'], '../gambar/admin/'.$rand.'_'.$filename);
		$xx = $rand.'_'.$filename;				
		mysqli_query($koneksi,"insert into admin values(NULL,'$nama','$username','$password','$xx')");
	header("location:admin.php");
	}
}
