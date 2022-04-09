<?php 
include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);
$level = $_POST['level'];

$cek = mysqli_query($koneksi,"select * from admin where admin_username='$username' and admin_password='$password'");
if(mysqli_num_rows($cek) > 0){
	session_start();
	$data = mysqli_fetch_assoc($cek);
	$_SESSION['id'] = $data['admin_id'];
	$_SESSION['username'] = $username;		
	$_SESSION['nama'] = $data['admin_nama'];	
	$_SESSION['foto'] = $data['admin_foto'];	
	$_SESSION['status'] = "Admin";	
	header("location:admin/index.php");
}else{
	header("location:index.php?alert=gagal");
}