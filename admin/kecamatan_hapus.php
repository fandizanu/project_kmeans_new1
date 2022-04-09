<?php

session_start();
if($_SESSION['status'] != "Admin"){
  header("location:../index.php");
}



 
include '../koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi,"delete from kecamatan where kecamatan_id='$id'");
mysqli_query($koneksi,"delete from tanaman_nilai where tn_kecamatan='$id'");
header("location:kecamatan.php?alert=hapus");