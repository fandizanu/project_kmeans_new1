<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>Dashboard - KMEANS </title>
	
        <link rel="shortcut icon" type="image/x-icon" href="../assets/img/earth.ico">
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">		
        <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="../assets/css/line-awesome.min.css">		
		<link rel="stylesheet" href="../assets/plugins/morris/morris.css">
		<link rel="stylesheet" href="../assets/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="../assets/css/style.css">
        

        <?php 
        session_start();
        include '../koneksi.php';
        if($_SESSION['status'] != "Admin"){
        	header("location:../index.php");
        }
        ?>

    </head>
	
    <body>
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
            <div class="header">
			
				<!-- Logo -->
                <div class="header-left">
                    <a href="index.php" class="logo">
						<img src="../assets/img/admin.ico" width="40" height="40" alt="">
					</a>
                </div>
				
				<a id="toggle_btn" href="javascript:void(0);">
					<span class="bar-icon">
						<span></span>
						<span></span>
						<span></span>
					</span>
				</a>
				
				<!-- Header Title -->
                <div class="page-title-box">
					<h3 style="color:black">Admin SIG</h3>
                </div>
				<!-- /Header Title -->
				
				<a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>
				
				<!-- Header Menu -->
				<ul class="nav user-menu">
									
					
					<li class="nav-item dropdown has-arrow main-drop">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<span class="user-img"><img src="../gambar/admin/<?php echo $_SESSION['foto'] ?>" alt="">
							<span class="status online"></span></span>
							<span>Admin</span>
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="profile.php">My Profile</a>							
							<a class="dropdown-item" href="logout.php">Logout</a>
						</div>
					</li>
				</ul>
				<!-- /Header Menu -->
				
				<!-- Mobile Menu -->
				<div class="dropdown mobile-user-menu">
					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="profile.php">My Profile</a>							
						<a class="dropdown-item" href="logout.php">Logout</a>
					</div>
				</div>
				<!-- /Mobile Menu -->
				
            </div>
			<!-- /Header -->
			
			<!-- Sidebar -->
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="menu-title"> 
								<span>Main</span>
							</li>
							<li class="menu">
								<a href="index.php"><i class="la la-dashboard"></i> <span> Dashboard</span></a>				
							</li>
							
							<!-- <li> 
								<a href="inventaris.php"><i class="la la-cube"></i> <span>Inventaris</span></a>
							</li> -->
							<li> 
								<a href="admin.php"><i class="la la-user"></i> <span>Admin</span></a>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-cube"></i> <span> Data Master </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="kecamatan.php"> Kecamatan </a></li>
									<li><a href="tanaman.php"> Nilai Atribut </a></li>
									<li><a href="kriteria.php"> Atribut </a></li>
								</ul>
							</li>

							<!-- <li> 
								<a href="tugas.php"><i class="la la-edit"></i> <span>Tugas</span></a>
							</li> -->

							<li> 
								<a href="kmeans.php"><i class="la la-share-alt"></i> <span>K-Means</span></a>
							</li>


							<!-- <li class="submenu">
								<a href="#"><i class="la la-share-alt"></i> <span> Pengantin </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="pengantin.php"> Semua </a></li>
									<li><a href="prospek.php"> Prospek </a></li>
									
								</ul>
							</li>
 -->
						<!-- 	<li class="submenu">
								<a href="#"><i class="la la-crosshairs"></i> <span> Event </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="akad_nikah.php"> Akad Nikah </a></li>
									<li><a href="resepsi.php"> Resepsi </a></li>
								</ul>
							</li> -->



							<!-- <li class="submenu">
								<a href="#"><i class="la la-pie-chart"></i> <span> Laporan </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="laporan_karyawan.php"> Laporan Karyawan </a></li>
									<li><a href="laporan_crew.php"> laporan Crew </a></li>									
									<li><a href="laporan_pengantin.php"> laporan Pengantin </a></li>						
									<li><a href="laporan_inventaris.php"> laporan Inventaris </a></li>									
								</ul>
							</li>
							<li> 
								<a href="https://paketpernikahan.co.id/"><i class="la la-heart"></i> <span>Website Pernikahan</span></a>
							</li>
							<li> 
								<a href="https://paketpernikahan.co.id/keuangan"><i class="la la-money"></i> <span>Acounting</span></a>
							</li>
 -->
							<li> 
								<a href="logout.php"><i class="la la-lock"></i> <span>Logout</span></a>
							</li>
							
						</ul>
					</div>
                </div>
            </div>
			<!-- /Sidebar -->