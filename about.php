<?php

require_once 'assets/inc/Footer.php';
require_once 'assets/inc/PageHeader.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="description" content="" />
	<title>Tentang Kami</title>
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

	<!-- Google Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:400,700,300" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Architects+Daughter" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,300" />
	<!-- End Google Fonts -->

	<!-- Contribute CSS Files -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/css/font-awesome.min.css" />
	<link rel="stylesheet" href="assets/css/flaticon.css" />
	<!-- Contribute End CSS Files -->

	<!-- Custom CSS Files -->
	<link rel="stylesheet" href="assets/css/style.css" />
	<link rel="stylesheet" href="assets/css/responsive.css" />
	<!-- Custom CSS Files -->

	<!-- Font Awesome CSS -->
	<link rel="stylesheet" href="assets/fontawesome/css/fontawesome.css">
	<link rel="stylesheet" href="assets/fontawesome/css/brands.css">
	<link rel="stylesheet" href="assets/fontawesome/css/solid.css">

	<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<div class="bg-danger">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->

</head>

<body>
	<?= include 'assets/inc/Navbar.php' ?>
	<?= PageHeader('Tentang Kami') ?>
	<!-- Content Start -->

	<!-- Section Story -->
	<section id="our-story">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="story-description">
						<span class="section-suptitle">Cerita Kami</span>
						<h2 class="section-title">Siapa Kami dan Sejarah</h2>
						<p>
							Perjalanan kami dimulai di tahun 2012 dengan misi sederhana: menghadirkan pengalaman kopi yang berbeda. Berawal dari rasa penasaran akan berbagai jenis kopi di dunia, kami mulai mengumpulkan biji kopi dari berbagai daerah, baik dari Indonesia maupun mancanegara, untuk memperkenalkan cita rasa yang beragam kepada para pecinta kopi.
							<br> <br>
							Kami ingin menciptakan ruang di mana kopi bisa dinikmati bukan hanya sebagai minuman, tapi sebagai pengalaman. Di Kedai Kopi, setiap sajian dibuat dengan cinta oleh barista kami yang berdedikasi, dan setiap cangkir yang Anda nikmati adalah hasil dari proses pemilihan dan penyeduhan yang teliti. Dari awal yang sederhana hingga menjadi tempat favorit untuk berbagi cerita, kami bangga bisa terus menemani Anda menikmati kopi dari seluruh dunia dalam suasana yang hangat dan akrab.
							<br> <br>
							Terima kasih sudah menjadi bagian dari perjalanan ini. Kami menantikan kesempatan untuk terus berbagi momen berharga dengan Anda—satu cangkir kopi pada satu waktu.
						</p>
						<a href="" class="btn-food">Ikuti Kami</a>
					</div>
				</div>
				<div class="col-sm-6">
					<img src="assets/img/demo/story/01.jpg" alt="" class="img-responsive img-story">
				</div>
			</div>
		</div>
	</section>
	<!-- End Section Story -->

	<!-- Section Services -->
	<section id="services" class="padd-100 gray-bg">
		<span class="section-suptitle text-center">Layanan Kami</span>
		<h2 class="section-title sep-type-2 text-center">Layanan Terbaik</h2>
		<p class="section-resume">
			Kami berkomitmen menyajikan kopi berkualitas tinggi dalam suasana nyaman, dibuat dari biji kopi terbaik dan teknik penyeduhan yang cermat.
		</p>
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 service-item">
					<i class="flaticon-food"></i>
					<div>
						<h4>Kursus Penyeduhan Kopi</h4>
						<p>Belakar menjadi barista sendiri dengan mengikuti kursus penyeduhan kopi di kedai kami.</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 service-item">
					<i class="flaticon-cup"></i>
					<div>
						<h4>Pengiriman Kopi Segar</h4>
						<p>Nikmati kopi berkualitas di mana pun Anda berada.</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 service-item">
					<i class="flaticon-drink"></i>
					<div>
						<h4>Menu Musiman Eksklusif</h4>
						<p>Kami menghadirkan menu kopi dan minuman eksklusif yang berubah sesuai musim.</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 service-item">
					<i class="flaticon-notes"></i>
					<div>
						<h4>Reservasi Acara Pribadi</h4>
						<p>Kami menyediakan layanan reservasi untuk acara pribadi seperti ulang tahun, gathering, atau rapat kecil.</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 service-item">
					<i class="flaticon-fork-and-knife-in-cross"></i>
					<div>
						<h4>Kopi Spesialitas Pribadi</h4>
						<p>Nikmati kopi yang diseduh sesuai selera Anda! Dari tingkat keasaman hingga kekentalan.</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 service-item">
					<i class="flaticon-percentage"></i>
					<div>
						<h4>Kartu Anggoa</h4>
						<p>Kami memiliki program loyalitas yang memberi Anda poin untuk setiap pembelian dan tukarkan poin Anda dengan diskon.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Section Services -->

	<!-- Section Gallery -->
	<section id="gallery" class="padd-100 ">
		<span class="section-suptitle text-center">Coffee Lover</span>
		<h2 class="section-title sep-type-2 text-center">Galeri Kafe</h2>
		<p class="section-resume">
			Selain berkomitmen untuk menyajikan kopi yang berkualitas, kami juga menyediakan tempat yang nyaman dan bersih untuk anda menikmati setiap cangkir yang anda miliki. Periksa dan lihat bagaimana bentuk dan suasana yang ada di dalam kafe kami!
		</p>
		<div class="container">
			<div class="row">
				<div class="restaurant-list">
					<div class="grid-sizer col-sm-6 col-md-4"></div>
					<div class="col-sm-6 col-md-4 grid-item">
						<a href="assets/img/demo/story/01.webp" data-fancybox-group="gallery" class="fancybox"><img src="assets/img/demo/story/01.webp" alt=""></a>
					</div>
					<div class="col-sm-6 col-md-4 grid-item">
						<a href="assets/img/demo/story/03.webp" data-fancybox-group="gallery" class="fancybox"><img src="assets/img/demo/story/03.webp" alt=""></a>
					</div>
					<div class="col-sm-6 col-md-4 grid-item">
						<a href="assets/img/demo/story/02.webp" data-fancybox-group="gallery" class="fancybox"><img src="assets/img/demo/story/02.webp" alt=""></a>
					</div>
					<div class="col-sm-6 col-md-4 grid-item">
						<a href="assets/img/demo/story/04.webp" data-fancybox-group="gallery" class="fancybox"><img src="assets/img/demo/story/04.webp" alt=""></a>
					</div>
					<div class="col-sm-6 col-md-4 grid-item">
						<a href="assets/img/demo/story/05.webp" data-fancybox-group="gallery" class="fancybox"><img src="assets/img/demo/story/05.webp" alt=""></a>
					</div>
				</div>
			</div>
		</div>
		<p class="text-center btn-load"><a href="" class="btn-food">Muat Lebih</a></p>
	</section>
	<!-- End Section Gallery -->

	<!-- Section Vision -->
	<section id="vision" data-background="assets/img/demo/bg/06.jpg" class="parallax-window padd-100">
		<h2 class="sr-only">Vision</h2>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="vision-item">
						<span class="count">291</span>
						<p>Menu Terbaik</p>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="vision-item">
						<span class="count">710</span>
						<p>Penghargaan</p>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="vision-item">
						<span class="count">163</span>
						<p>Koki</p>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="vision-item last-item">
						<span class="count">212</span>
						<p>Kustomer Harian</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Section Vision -->

	<!-- Section apps -->
	<section id="apps" class="padd-bottom-100" style="margin-top: 5rem;">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="desc-apps">
						<span class="section-suptitle">Untuk Mu</span>
						<h2 class="section-title">Aplikasi mudah digunakan</h2>
						<p>
							Unduh aplikasi kami yang telah mengintegrasikan sistem pembayaran dan layanan antar-pesan.
						</p>
						<b class="big-title">Unduh Aplikasi</b>
						<p>
							Dapatkan aplikasi seluler gratis untuk <span>Kedai Kopi</span> tersedia di:
						</p>
						<div class="link">
							<a href="">
								<img src="assets/img/btn_apps.png" alt="">
							</a>
							<a href="">
								<img src="assets/img/btn_google.png" alt="">
							</a>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<img src="assets/img/demo/apps/03.png" alt="" class="img-responsive">
				</div>
			</div>
		</div>
	</section>
	<!-- End Section apps -->

	<!-- Content End -->
	<?= $Footer; ?>
</body>

</html>