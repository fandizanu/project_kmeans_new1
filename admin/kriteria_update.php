<?php

session_start();
if($_SESSION['status'] != "Admin"){
  header("location:../index.php");
}



 
include '../koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
mysqli_query($koneksi,"update kriteria set kriteria_nama='$nama' where kriteria_id='$id'");
header("location:kriteria.php?alert=edit");