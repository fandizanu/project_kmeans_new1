<?php
session_start();
if($_SESSION['status'] != "Admin"){
  header("location:../index.php");
}




include '../koneksi.php';
require('../assets/plugins/fpdf/fpdf.php');
$pdf = new FPDF('P', 'mm','A4');

$pdf->AddPage();
$pdf->SetFont('Times','B',12);
$pdf->Cell(0,7,'LAPORAN DATA KARYAWAN',0,1,'C');
$pdf->Cell(0,7,'MAKNA WEDDING',0,1,'C');

$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Times','B',10);

$pdf->Cell(8,6,'No',1,0,'C');
$pdf->Cell(40,6,'Nama',1,0,'C');   

$pdf->SetFont('Times','',12);

$no=1;
$data = mysqli_query($koneksi,"select * from kecamatan");
while($d = mysqli_fetch_array($data)){
  $pdf->Cell(8,6,$no,1,0);
  $pdf->Cell(40,6,$d['kecamatan_nama'],1,1);       
  $no++;
}


$pdf->Output();

