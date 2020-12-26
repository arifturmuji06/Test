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

	<!-- Isi -->
	<section class="isi">
		<div id="detail">
			<div class="container">
				<!-- profil pembuat -->
				<div class="profil">
					<img src="assets/img/arif.jpg" alt="" class="img-profil">
					<p class="fw-bold" id="nama">Arif Turmujiiiiii</p>
					<p style="margin-top: -15px;"><i class="fas fa-map-marker-alt"></i> Subang</p>
				</div>
				<!-- profil pembuat -->
				<!-- deskripsi -->
				<div class="deskripsi" style="border-bottom:1px solid rgb(221, 221, 221);">
					<p>Welkom tu ma yutub cenel</p>
				</div>
				<!-- deskripsi -->
				<!-- resep saya -->
				<h4>Resep saya</h4>
				<div class="row row-cols-1 row-cols-md-4 g-4">
					<div class="col">
						<div class="card">
							<img src="assets/img/mie-ayam.jpg" class="card-img-top" alt="..." style="margin-bottom: -10px;">
							<div class="card-body">
								<a href="" class="judul">
									<h5 class="card-title" style="margin-bottom: 10px;">Mie Ayam Janda</h5>
								</a>
							</div>
							<div class="card-footer">
								<small class="text-muted">Last updated 3 mins ago</small>
							</div>
						</div>
						<!-- Buat nge link ke detail -->
						<a href="detail.php" class="stretched-link"></a>
					</div>
				</div>
				<!-- resep saya -->
			</div>
		</div>
	</section>
	<!-- Isi -->

	<!-- Footer -->
	<footer>
		<div class="container text-center">
			<div class="row">
				<div class="col-sm-12">
					<p>&copy; Copyright 2020 | by. Cookies team.</p>
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