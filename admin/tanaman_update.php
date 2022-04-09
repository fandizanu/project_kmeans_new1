<?php

session_start();
if($_SESSION['status'] != "Admin"){
  header("location:../index.php");
}



 
include '../koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
mysqli_query($koneksi,"update tanaman set tanaman_nama='$nama' where tanaman_id='$id'");
header("location:tanaman.php?alert=edit");