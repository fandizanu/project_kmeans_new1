<!DOCTYPE html>
<html>
<head>
   <script src="../Chart.js"></script>
</head>
<body>
    <br>
    <h4>Cara Membuat Grafik (Chart) di PHP dengan Chart.js</h4>
    <canvas id="myChart"></canvas>
    <?php
    // Koneksikan ke database
    include '../koneksi.php';
    //Inisialisasi nilai variabel awal
    $karyawan= "";
    $total=null;
    $total_harga = 0;
    //Query SQL
    $sql = mysqli_query($koneksi,"select * from karyawan");
    while ($k = mysqli_fetch_array($sql)) {
    	$karyawan_id = $k['karyawan_id'];
    	$sql2 = mysqli_query($koneksi,"select sum(pengantin_nominal_paket) as total_pp from pengantin where pengantin_marketing='$karyawan_id'");
    	$p = mysqli_fetch_assoc($sql2);

    	$kar = $k['karyawan_nama'];
    	$karyawan .= "'$kar'". ", ";


    	$pp = $p['total_pp'];    	
    	$total .= "$pp". ", ";
    }


    ?>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',
        // The data for our dataset
        data: {
            labels: [<?php echo $karyawan; ?>],
            datasets: [{
                label:'Data Jurusan Mahasiswa ',
                backgroundColor: ['rgb(255, 99, 132)', 'rgba(56, 86, 255, 0.87)', 'rgb(60, 179, 113)','rgb(175, 238, 239)'],
                borderColor: ['rgb(255, 99, 132)'],
                data: [<?php echo $total; ?>]
            }]
        },

        // Configuration options go here
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
</script>
</body>
</html>