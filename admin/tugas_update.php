<?php 
session_start();
if($_SESSION['status'] != "Admin"){
  header("location:../index.php");
}



date_default_timezone_set('Asia/Jakarta');
include '../koneksi.php';
$saya = $_SESSION['id'];
$id = $_POST['id'];
$keterangan = $_POST['keterangan'];
$tanggal = $_POST['tanggal'];
$status = $_POST['status'];
$pengguna = $_POST['pengguna'];

$tanggal_sekarang = date("Y-m-d");

mysqli_query($koneksi,"update tugas set tugas_tanggal_pemberian='$tanggal', tugas_karyawan='$pengguna', tugas_keterangan='$keterangan', tugas_status='$status' where tugas_id='$id'");

mysqli_query($koneksi, "insert into tugas_histori (th_id, th_tugas, th_tanggal, th_status_admin, th_keterangan) values(NULL,'$id','$tanggal_sekarang','$saya','$status')");

header("location:tugas.php?alert=edit");