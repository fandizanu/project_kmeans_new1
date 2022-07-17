<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>	
	
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Pacifico&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
	<link href="https://fonts.googleapis.com/css2?family=Salsa&display=swap" rel="stylesheet">
	<link href="assets/css/about.css" rel="stylesheet">
</head>
<body>
<section class="text-center py-5" id="about">
	<header class="masthead bg-light text-black text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src="gambar/avataaars.svg" alt="Avatar" style="height:250px;width:250px;" />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">Zanu Alfandi Kamil</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">Fakultas Teknik - Informatika - 2018</p>
            </div>
			<div class="container my-4 border border-black " >
				<div class="row">
					<div class="col-md" style="box-shadow:10px 15px black">
						<p style="font-size: 20px; ">
							Sebuah website untuk  pembuatan Tugas Akhir yang berjudul Pengembangan Webgis Untuk Pengclusteran Daerah Rawan Banjir di Kota Samarinda. 
							Website ini dibangun guna mengelompokkan daerah-daerah di samarinda yang merupakan daerah rawan banjir, dengan membagi menjadi tiga kelompok yaitu: banjir tinggi, banjir sedang, dan banjir rendah.
							Terdapat 10 kecamatan di Kota Samarinda dikelompokkan menggunakan algoritma K-Means dengan 4 atribut yaitu: curah hujan, jenis jalan, penggunaan lahan, dan kemiringan lereng.
						</p>
					</div>
				</div>
			</div>
        </header>
	</section> 
	<section class="text-center bg-info py-5" id="skills">
		<h2 style="margin:40px; border-bottom:3px solid black;	">Skills</h2>
		<div class="container">
			<div class="row" style="margin: 20px 0;">
				<div class="col-md-4">
					<div class="card" >
						<img src="gambar/php.png" class="card-img-top" alt="PHP">
						<div class="card-body">
							<p class="card-text">PHP</p>
						</div>
					</div>
				</div>				
				<div class="col-md-4">					
					<div class="card" >
						<img src="gambar/py.png" class="card-img-top" alt="PHP">
						<div class="card-body">
							<p class="card-text">Python</p>
						</div>
					</div>					
				</div>
				<div class="col-md-4">				
					<div class="card" >
						<img src="gambar/c.png" class="card-img-top" alt="PHP">
						<div class="card-body">
							<p class="card-text">C</p>
						</div>
					</div>				
				</div>
			</div>
		</div>
    </section>
	<section class="text-center py-5" id="sosmed">
		<h2 style="margin:40px 0;">Find Me On </h2>
		<img class="img-fluid" src="gambar/arrow.png" alt="arrow">
	</section>

</body>
</html>

	

<?php include 'footer.php';
	
	



