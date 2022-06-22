<?php include 'header.php'; ?>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Pacifico&display=swap" rel="stylesheet">
<style>
	
	.main {
		position: relative;
		width: 100%;
		height: 50%;
		
	}
	.foto{
		position: absolute;
		top: 80px;
		left: 10px;
		width: 190px;
		height: 255px;
		border:3px solid black;
		
	}
	.nama{
		position: absolute;
		top: 80px;
		left: 250px;
		width: 82%;
		height: 255px;	
		/* border: solid 3px black; */
	}
	.isi{
		position: absolute;
		top: 70%;
		left: 10px;
		width: 98%;
		height: 255px;	
		/* border: solid 3px black; */
	}
	
</style>
	<div class="menu" style=" padding:50px 100px ">
		<div class="content" style="background-color: #ddffff; ">
			<div class="main" style="font-family: 'Montserrat', sans-serif;">
			<h1 style="font-family: 'Montserrat', sans-serif; font-weight:bold; padding-left:10px;text-align:center; border:solid 2px black; border-radius:10px; ">TENTANG </h1>
			
				<div class="foto">
				<p>
				<img src="gambar/PasfotoAlma(Merah).jpg" style="height: 250px; ">
				</p>				
				</div>

				<div class="nama" >
					<h3 style="text-align: left; font-family: 'Montserrat', sans-serif; font-weight:bolder ">Zanu Alfandi Kamil</h3>
					<h3 style="text-align: left; font-family: 'Montserrat', sans-serif; font-weight:bolder"> 1815015074</h3>
					<h3 style="text-align: left; font-family: 'Montserrat', sans-serif; font-weight:bolder"> Informatika</h3>
					<h3 style="text-align: left; font-family: 'Montserrat', sans-serif; font-weight:bolder"> Fakultas Teknik </h3>
					<h3 style="text-align: left; font-family: 'Montserrat', sans-serif; font-weight:bolder"> Universitas Mulawarman </h3>
					
					
				</div>
				<div class="isi">
					<p style="text-align: justify; font-weight:bolder">Sebuah website untuk  pembuatan Tugas Akhir yang berjudul Pengembangan Webgis Untuk Pengclusteran Daerah Rawan Banjir di Kota Samarinda. 
					Website ini dibangun guna mengelompokkan daerah-daerah di samarinda yang merupakan daerah rawan banjir, dengan membagi menjadi tiga kelompok yaitu: banjir tinggi, banjir sedang, dan banjir rendah.
					Terdapat 10 kecamatan di Kota Samarinda dikelompokkan menggunakan algoritma K-Means dengan 4 atribut yaitu: curah hujan, jenis jalan, penggunaan lahan, dan kemiringan lereng.
					</p>
				</div>
			</div>
			
		
		</div>
	</div>

<?php include 'footer.php';
	
	



