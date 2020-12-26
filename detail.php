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
				<!-- gambar -->
				<div class="gambar">
					<img src="assets/img/mie-ayam.jpg" alt="" class="card-img">
				</div>
				<!-- gambar -->
				<!-- judul -->
				<div class="judul">
					<h1 class="fw-bold">Bakso</h1>
				</div>
				<!-- judul -->
				<!-- profil pembuat -->
				<div class="profil">
					<img src="assets/img/arif.jpg" alt="" class="img-profil">
					<p class="fw-bold" id="nama">Arif Turmujiiiiii</p>
					<p style="margin-top: -15px;"><i class="fas fa-map-marker-alt"></i> Subang</p>
				</div>
				<!-- profil pembuat -->
				<!-- deskripsi -->
				<div class="deskripsi">
					<p>Buat makanan ini iseng doang, g ush di ikutin gpp, yang penting deskripsinya ke isi buat nyoba halaman heheheheheheheheheheheheheheheheheheheheehe</p>
				</div>
				<!-- deskripsi -->
				<!-- durasi -->
				<div class="durasi">
					<p><i class="far fa-clock" style="color:  rgb(160, 160, 160);"></i> 30 menit</p>
				</div>
				<!-- durasi -->
				<!-- porsi -->
				<div class="porsi">
					<p><i class="fas fa-utensils" style="color: rgb(160, 160, 160);"></i> 10 orang</p>
				</div>
				<!-- porsi -->
				<!-- bahan -->
				<div class="bahan">
					<h4>Bahan-bahan</h4>
					<!-- pengulangan -->
					<div class="bahan-bahan">
						<p>1 buah Cengkeh</p>
					</div>
					<!-- pengulangan -->
				</div>
				<!-- bahan -->
				<!-- langkah -->
				<div class="langkah">
					<h4>Langkah</h4>
					<!-- pengulangan -->
					<div class="nomor">
						<p>1</p>
					</div>
					<div class="langkah-langkah">
						<p>lempar telur dengan kedua tangan, pastikan digenggam dengan senyaman mungkin kemudian lempar</p>
					</div>
					<!-- pengulangan -->
				</div>
				<!-- langkah -->
				<!-- tanggal upload -->
				<div class="tgl-upload">
					<p>26 Desember 2020</p>
				</div>
				<!-- tanggal upload -->
				<!-- komentar -->
				<div class="komentar">
					<h4><i class="fas fa-comment" style="color:  rgb(160, 160, 160);"></i> Komentar</h4>
					<div class="d-flex justify-content-start" style="margin-top: 10px;">
						<img src="assets/img/tio.jpg" alt="" style="width: 38px; height:38px; border-radius:50%;margin-right:5px;">
						<div class="input-group mb-3">
							<input type="text" class="form-control" placeholder="Tulis disini ..." aria-label="" aria-describedby="basic-addon2">
							<div class="input-group-append">
								<button class="btn btn-outline-secondary" type="button" style="box-shadow: none;">Kirim <i class="fas fa-paper-plane"></i></button>
							</div>
						</div>
					</div>
					<!-- tampil komentar -->
					<div class="tampil-komentar">
						<p style="float: left;margin-left:15px;margin-right:24px;margin-top:2px;">|</p>
						<img src="assets/img/nathan.jpg" alt="" style="width: 38px; height:38px; border-radius:50%;margin-right:5px; float:left;">
						<div class="isi-komentar">
							<p><b>NathanielGanteng</b></p>
							<p style="margin-top:-20px;color:rgb(160, 160, 160);"><i class="far fa-clock"></i> 100 tahun yang lalu</p>
							<p style="margin-top: -10px;"><i>"Ini sampah"</i></p>
						</div>
					</div>
					<div class="tampil-komentar">
						<p style="float: left;margin-left:15px;margin-right:24px;margin-top:2px;">|</p>
						<img src="assets/img/tio.jpg" alt="" style="width: 38px; height:38px; border-radius:50%;margin-right:5px; float:left;">
						<div class="isi-komentar">
							<p><b>CEO Mangoyovi</b></p>
							<p style="margin-top:-20px;color:rgb(160, 160, 160);"><i class="far fa-clock"></i> belom enter woy</p>
							<p style="margin-top: -10px;"><i>"Resep ini sangat sangat sangat sangat tidak membantu, terimakasih banyak yang sebanyak-banyaknya"</i></p>
						</div>
					</div>
					<!-- tampil komentar -->
				</div>
				<!-- komentar -->
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