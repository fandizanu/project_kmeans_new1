<?php 
session_start();
if($_SESSION['status'] != "Admin"){
  header("location:../index.php");
}

include'../koneksi.php';
$id = mysqli_real_escape_string($koneksi, $_GET['id']);
mysqli_query($koneksi,"delete from tugas where tugas_id='$id'");
mysqli_query($koneksi,"delete from tugas_histori where th_tugas='$id'");
header("location:tugas.php?alert=hapus");

?>