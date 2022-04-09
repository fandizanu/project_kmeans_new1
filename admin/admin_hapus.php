<?php 

session_start();
if($_SESSION['status'] != "Admin"){
  header("location:../index.php");
}




include'../koneksi.php';
$id = mysqli_real_escape_string($koneksi,$_GET['id']);
mysqli_query($koneksi,"delete from admin where admin_id='$id'");
header("location:admin.php?alert=hapus");

?>