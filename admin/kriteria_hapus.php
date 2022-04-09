<?php

session_start();
if($_SESSION['status'] != "Admin"){
  header("location:../index.php");
}


 
include '../koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi,"delete from kriteria where kriteria_id='$id'");
mysqli_query($koneksi,"delete from tanaman_nilai where tn_kriteria='$id'");
mysqli_query($koneksi,"delete from tanaman_kriteria where tk_kriteria='$id'");
header("location:kriteria.php?alert=hapus");