<?php 

session_start();
if($_SESSION['status'] != "Admin"){
	header("location:../index.php");
}




include '../koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = md5($_POST['password']);

if($_POST['password']==""){
	mysqli_query($koneksi,"update admin set admin_nama='$nama', admin_username='$username' where admin_id='$id'");
}else{
	mysqli_query($koneksi,"update admin set admin_nama='$nama', admin_username='$username', admin_password='$password' where admin_id='$id'");		
}
header("location:admin.php");