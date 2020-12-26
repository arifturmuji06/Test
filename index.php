<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="icon" type="image/png" href="assets/img/cookies.png">
	<title>Cookies</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="css/fontawesome/css/all.css">
</head>

<body>
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
		<div class="container">
			<div class="d-flex justify-content-start">
				<a class="navbar-brand" href="index.php">
					<img src="assets/img/cookies.png" alt="" width="50" style="">
				</a>
				<form action="" method="get" class="form-inline">
					<input class="form-control mr-sm-0" type="search" name="keyword" id="keyword" placeholder="Cari resep/bahan/pengguna ..." style="width:200px;" aria-label="Search">
					<button class="btn my-2 my-sm-0" type="submit" name="cari" id="tombol"><i class="fas fa-search"></i></button>
				</form>
			</div>
			<div class="d-flex justify-content-end">
				<button type="button" class="btn btn-warning fw-bold" style="color: white;">Masuk</button>
			</div>
		</div>
	</nav>
	<!-- Navbar -->

	<!-- Search & Iklan -->
	<div class="home">
		<div class="container">
			<div class="d-flex justify-content-center">
				<img src="assets/img/cookies.png" class="logo" alt="">
			</div>
			<div class="d-flex justify-content-center">
				<form action="" method="get" class="form-inline" style="margin-top: 20px;">
					<input class="form-control mr-sm-2" type="search" name="keyword" id="keyword" placeholder="Cari resep/bahan/pengguna ..." aria-label="Search" style="width:500px">
					<button class="btn" type="submit" name="cari" id="tombol"><i class="fas fa-search"></i></button>
				</form>
			</div>

		</div>
	</div>
	<!-- Search & Iklan -->

	<!-- Slide Foto -->
	<div class="iklan">
		<div class="container iklan">
			<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
				<ol class="carousel-indicators">
					<li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
					<li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
					<li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="assets/img/iklan1.jpg" class="d-block w-100" alt="..." style="height: 150px;">
					</div>
					<div class="carousel-item">
						<img src="assets/img/iklan2.jpg" class="d-block w-100" alt="..." style="height: 150px;">
					</div>
					<div class="carousel-item">
						<img src="assets/img/iklan3.jpg" class="d-block w-100" alt="..." style="height: 150px;">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</a>
			</div>
		</div>
	</div>
	<!-- Slide Foto -->

	<!-- Isi -->
	<section class="isi">
		<div id="container">
			<div class="container">
				<!-- Belom Pengulangan -->
				<div class="row row-cols-1 row-cols-md-4 g-4">
					<div class="col">
						<div class="card">
							<img src="assets/img/mie-ayam.jpg" class="card-img-top" alt="..." style="margin-bottom: -10px;">
							<div class="card-body">
								<a href="" class="judul">
									<h5 class="card-title" style="margin-bottom: 10px;">Mie Ayam</h5>
								</a>
								<div class="d-flex justify-content-center">
									<img src="assets/img/arif.jpg" alt="" style="width:30px; height:30px; border-radius:50%;" id="img-profil">
								</div>
								<div class="d-flex justify-content-center">
									<p class="fw-bold" id="nama" style="">Arif Turmujiiiiii</p>
								</div>
								<div id="dash">
									<p class="card-text">Hari ini saya masak Mie Ayam untuk makan pagi, siang, sore, dan malam</p>
								</div>
							</div>
							<div class="card-footer">
								<small class="text-muted">Last updated 3 mins ago</small>
							</div>
						</div>
						<!-- Buat nge link ke detail -->
						<a href="detail.php" class="stretched-link"></a>
					</div>
					<div class="col">
						<div class="card">
							<img src="assets/img/bakso.jpg" class="card-img-top" alt="..." style="margin-bottom: -10px;">
							<div class="card-body">
								<a href="" class="judul">
									<h5 class="card-title" style="margin-bottom: 10px;">Bakso</h5>
								</a>
								<div class="d-flex justify-content-center">
									<img src="assets/img/arif.jpg" alt="" style="width:30px; height:30px; border-radius:50%;" id="img-profil">
								</div>
								<div class="d-flex justify-content-center">
									<p class="fw-bold" id="nama" style="">Arif Turmujiiiiii</p>
								</div>
								<div id="dash">
									<p class="card-text">Hari ini saya masak Bakso untuk makan pagi, siang, sore, dan malam</p>
								</div>
							</div>
							<div class="card-footer">
								<small class="text-muted">Last updated 3 mins ago</small>
							</div>
						</div>
					</div>
				</div>
				<!-- Batas Pengulangan -->
			</div>
		</div>
	</section>
	<!-- Isi -->

	<!-- Footer -->
	<footer>
		<div class="container text-center">
			<div class="row">
				<div class="col-sm-12">
					<p>&copy; Copyright 2018 | built with <i class="glyphicon glyphicon-heart"></i> by. <a href="https://www.instagram.com/arjunsurya_a/">Arjun Surya Atmaja</a> .</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer -->
	<script src="js/jquery-3.3.1.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/npm.js"></script>

	<!-- Online -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>

</html>