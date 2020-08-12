<html>
	<head>
		<title>About - MobilIndonesia.com</title>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;700&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<?php
			include("menu.php");
		?>
		<div class="page-header">
            <h2><center>ABOUT</center></h2>
		</div>
			<div>
				<div class="banner">
					<div class="slogan">
						<h1>MOBILINDONEISA.COM</h1>
						<p>kami menyediakan berbagai jenis kendaraan untuk kalian sewa, 
							baik itu kendaraan kecil atau kendaraan sejenis travel, 
							kami juga menyediakan penyewaan supir, tentunya dengan banyak diskon 
							yang akan kalian dapat.</p>
						<h4>Yuu sewa kendaraan di MOBILINDONESIA.COM</h4>
					</div>
				</div>
				<div class="banner">
					<div class="img-container">
						<img src="img/about.png" alt="">
					</div>
				</div>
				<br class="clear">
			</div>

			<div>
				<div class="section-header">
					<h2>Profil Perusahaan</h2>
				</div>
				<div class="perusahaan">
					<p>MOBILINDONESIA.COM merupakan sebuah perusahaan rental Mobil terbesar saat ini, 
						sudah dangat dipercayai oleh berbagai pihak. Kami juga menyediakan banyak jenis kendaraan
						yang bisa anda pesan. Untuk lebih jelasnya tentang kendaraan yang ada di perusahaan 
						kami silahkan mengunjungi bagian Kendaraan.</p>
				</div>

			</div>

		<div class="text-center">
			
			<div class="section-header">
				<h1 class="title">Tim Pengelola</h1>
			</div>

			<div class="about img">
			<img src="img/ihsan.jpg">
						<div class="garis-container text-center">
							<div class="garis-putih"></div>
						</div>
						<h2 class="text-center">Ihsan Taofik</h2>
						<p class="text-center">10119315</p>
						<h2 class="text-center">DIREKTUR KEUANGAN</h2>
			</div>
			<div class="about img">
			<img src="img/adi.jpg">
						<div class="garis-container text-center">
							<div class="garis-putih"></div>
						</div>
						<h2 class="text-center">Adi Rizal</h2>
						<p class="text-center">10119318</p>
						<h2 class="text-center">DIREKTUR IT</h2>
			</div>
			<div class="about img">
			<img src="img/aldy.jpg">
						<div class="garis-container text-center">
							<div class="garis-putih"></div>
						</div>
						<h2 class="text-center">Aldy Kusuma</h2>
						<p class="text-center">10119297</p>
						<h2 class="text-center">PRESIDENT DIREKTUR</h2>
			</div>
			<br class="clear">
			<div class="about img">
			<img src="img/lutfi.jpg">
						<div class="garis-container text-center">
							<div class="garis-putih"></div>
						</div>
						<h2 class="text-center">Lutfi Azmi</h2>
						<p class="text-center">10119326</p>
						<h2 class="text-center">DIREKTUR PEMASARAN</h2>
			</div>
			<div class="about img">
			<img src="img/rafi.jpg">
						<div class="garis-container text-center">
							<div class="garis-putih"></div>
						</div>
						<h2 class="text-center">Mochamad Rafi</h2>
						<p class="text-center">10119329</p>
						<h2 class="text-center">DIREKTUR SDM</h2>
			</div>
			<div class="about img">
			<img src="img/john.jpg">
						<div class="garis-container text-center">
							<div class="garis-putih"></div>
						</div>
						<h2 class="text-center">John Pardamean</h2>
						<p class="text-center">10119349</p>
						<h2 class="text-center">DIREKTUR ASET</h2>
			</div>
			
			<br class="clear">

			<div class="jurusan">
				<h3 id="kelas-container" class="text-center"></h3>
				<h3 id="jurusan-container" class=" text-center"></h3>
				<h3 id="fakultas-container" class="text-center"></h3>
			</div>		
		</div>

		<script>
				
				kelas = 'IF-8';
				jurusan = 'Teknik Informatika';
				fakultas = 'Fakultas Teknik & Ilmu Komputer';
				
				document.getElementById('kelas-container').innerHTML = kelas;
				document.getElementById('jurusan-container').innerHTML = jurusan;
				document.getElementById('fakultas-container').innerHTML = fakultas;
		</script>
		<?php
				include("footer.php");
		?>
	</body>
</html> 