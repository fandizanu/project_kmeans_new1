<?php 
session_start();
if($_SESSION['status'] != "Admin"){
  header("location:../index.php");
}



date_default_timezone_set('Asia/Jakarta');
include '../koneksi.php';
$keterangan = $_POST['keterangan'];
$tanggal = $_POST['tanggal'];
$pengguna = $_POST['pengguna'];
$status ="Upload";

$tanggal_sekarang = date("Y-m-d");
$saya = $_SESSION['id'];
mysqli_query($koneksi,"insert into tugas values(NULL,'$tanggal','$pengguna','$keterangan','$status')");
$id_terakhir = mysqli_insert_id($koneksi);

mysqli_query($koneksi, "insert into tugas_histori (th_id, th_tugas, th_tanggal, th_status_admin, th_keterangan) values(NULL,'$id_terakhir','$tanggal_sekarang','$saya','$status')");

header("location:tugas.php");