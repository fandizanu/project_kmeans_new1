<?php

session_start();
if($_SESSION['status'] != "Admin"){
  header("location:../index.php");
}



 
include '../koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi,"delete from tanaman where tanaman_id='$id'");
mysqli_query($koneksi,"delete from tanaman_kriteria where tk_tanaman='$id'");
mysqli_query($koneksi,"delete from tanaman_nilai where tn_tanaman='$id'");
header("location:tanaman.php?alert=hapus");