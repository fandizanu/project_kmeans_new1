<?php

session_start();
if($_SESSION['status'] != "Admin"){
  header("location:../index.php");
}



 
include '../koneksi.php';
$nama = $_POST['nama'];
mysqli_query($koneksi,"insert into tanaman values (NULL, '$nama')");
header("location:tanaman.php?alert=tambah");