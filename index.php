<!DOCTYPE html>
<html>
	<head>
		<title>Home - MobilIndonesia.com</title>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;700&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		
		<?php
			include("menu.php");
		?>
			<div class="banner-container">
				<div class="banner">
					<div class="slogan">
						<h1>MOBILINDONEISA.COM</h1>
						<h2>RENTAL MOBIL TERBAIK YANG ADA SAAT INI</h2>
						<p>Selamat datang di MOBILINDONESIA.COM kami mengutamakan pelayanan terbaik demi membuat kesan terbaik</p>
					</div>
				</div>
				<div class="banner">
					<div class="img-container">
						<img src="img/logo.png" alt="">
					</div>
				</div>
				<br class="clear">
			</div>
			<div class="section-header">
					<h2>TRENDING DI MOBILINDONESIA.COM</h2>
					<p>PELAYANAN ADALAH YANG UTAMA BAGI KAMI</p>
			</div>
			<div>
				<div class="trending-car">
				<a href="#" onMouseOver ="gantiGambar (mobilAvanza, gantiGambarAvanza[baru])"
								onMouseout ="gantiGambar (mobilAvanza, gantiGambarAvanza[sumber])">
								<img src="img/avanza.jpg" width="200" height="100" name="mobilAvanza" border=0>
							</a>
							<p>
								<font-family face="Arial" ><center>Toyota Avanza</center></font-family>
							</p>
				</div>
				<div class="trending-car">
				<a href="#" onMouseOver ="gantiGambar (mobilTerios, gantiGambarTerios[baru])"
								onMouseout ="gantiGambar (mobilTerios, gantiGambarTerios[sumber])">
								<img src="img/terios.jpg" width="200" height="100" name="mobilTerios" border=0>
							</a>
							<p>
								<font-family face="Arial" ><center>Daihatsu Terios</center></font-family>
							</p>
				</div>
				<div class="trending-car">
				<a href="#" onMouseOver ="gantiGambar (mobilJazz, gantiGambarJazz[baru])"
								onMouseout ="gantiGambar (mobilJazz, gantiGambarJazz[sumber])">
								<img src="img/jazz.jpg" width="200" height="100" name="mobilJazz" border=0>
							</a>
							<p>
								<font-family face="Arial" ><center>Honda Jazz</center></font-family>
							</p>
				</div>
				<div class="trending-car">
				<a href="#" onMouseOver ="gantiGambar (mobilAPV, gantiGambarAPV[baru])"
								onMouseout ="gantiGambar (mobilAPV, gantiGambarAPV[sumber])">
								<img src="img/apv.jpg" width="200" height="100" name="mobilAPV" border=0>
							</a>
							<p>
								<font-family face="Arial" ><center>Suzuki APV</center></font-family>
							</p>
				</div>
				<div class="trending-car">
				<a href="#" onMouseOver ="gantiGambar (mobilBrio, gantiGambarBrio[baru])"
								onMouseout ="gantiGambar (mobilBrio, gantiGambarBrio[sumber])">
								<img src="img/brio.jpg" width="200" height="100" name="mobilBrio" border=0>
							</a>
							<p>
								<font-family face="Arial" ><center>Honda Brio</center></font-family>
							</p>
				</div>
				<div class="trending-car">
				<a href="#" onMouseOver ="gantiGambar (mobilExpander, gantiGambarExpander[baru])"
								onMouseout ="gantiGambar (mobilExpander, gantiGambarExpander[sumber])">
								<img src="img/expander.jpg" width="200" height="100" name="mobilExpander" border=0>
							</a>
							<p>
								<font-family face="Arial" ><center>Honda Brio</center></font-family>
							</p>
				</div>
				<br class="clear">
			</div>

			<script>
				 var sumber = 0;
				var baru = 1;
				
				function ciptakanArray (gambarAwal, gambarBaru){
					var arrayGambar = new Array;

					arrayGambar[sumber] = new Image;
					arrayGambar[sumber].src = gambarAwal;
					arrayGambar[baru] = new Image;
					arrayGambar[baru].src = gambarBaru;

					return arrayGambar;
				}

				function gantiGambar (gambarTarget, gambarTampil){
					gambarTarget.src = gambarTampil.src;
				}

				var gantiGambarAvanza = ciptakanArray ("img/avanza.jpg", "img/avanza_banyak.jpg")
				var gantiGambarTerios = ciptakanArray ("img/terios.jpg", "img/terios_banyak.jpg")
				var gantiGambarJazz = ciptakanArray ("img/jazz.jpg", "img/jazz_banyak.jpg")
				var gantiGambarAPV = ciptakanArray ("img/apv.jpg", "img/apv_banyak.jpg")
				var gantiGambarBrio = ciptakanArray ("img/brio.jpg", "img/brio_banyak.jpg")
				var gantiGambarExpander = ciptakanArray ("img/expander.jpg", "img/expander_banyak.jpg")
			</script>
			<?php
				include("footer.php");
			?>
	</body>
	
</html>