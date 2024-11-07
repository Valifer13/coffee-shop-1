<?php

require_once 'assets/inc/Footer.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="description" content="" />
	<title>Beranda</title>
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
	<!-- Content Start -->

	<!-- Slide -->
	<section id="main-slider" data-background="assets/img/demo/slides/01.webp" class="parallax-window">
		<div class="section-slogan">
			<img src="assets/img/logo.png" alt="">
			<h2>Keistimewaan di Setiap Tegukan</h2>
			<h3>Fine Life + Coffee</h3>
		</div>
		<span class="scoll-down">Scroll Down</span>
	</section>
	<!-- End Slide -->

	<!-- Section Special Offers -->
	<section id="special-offers" class="padd-100">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="offer-left">
						<span class="section-suptitle">Dari Menu</span>
						<h2 class="section-title">Tawaran Spesial</h2>
						<div class="offer-item">
							<img src="assets/img/demo/menu/coffee/espresso.webp" alt="espresso_coffee" class="img-responsive">
							<div>
								<h3>Kopi Espresso</h3>
								<p>
									Kopi hitam pekat dengan rasa kuat, disajikan dalam cangkir kecil.
								</p>
							</div>
							<span class="offer-price">30K</span>
						</div>
						<div class="offer-item">
							<img src="assets/img/demo/menu/coffee/americano.webp" alt="americano_coffee" class="img-responsive">
							<div>
								<h3>Kopi Americano</h3>
								<p>
									Espresso yang ditambahkan air panas, menghasilkan kopi hitam dengan rasa lebih ringan.
								</p>
							</div>
							<span class="offer-price">35K</span>
						</div>
						<div class="offer-item">
							<img src="assets/img/demo/menu/coffee/cappuccino.webp" alt="cappuccino_coffee" class="img-responsive">
							<div>
								<h3>Kopi Cappuccino</h3>
								<p>
									Espresso dengan campuran susu panas dan busa susu di atasnya, memiliki tekstur lembut.
								</p>
							</div>
							<span class="offer-price">45K</span>
						</div>
					</div>
				</div>
				<div class="col-md-6 hidden-sm hidden-xs">
					<div class="offer-right">
						<img src="assets/img/demo/offers/window_menu.webp" alt="" class="img-responsive">
						<a href="menu.php">
							Jelajahi	
							<span>menu kami</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Section Special Offers -->

	<!-- Section Reservation -->
	<section id="reservation" data-background="assets/img/demo/bg/01.jpg" class="parallax-window">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<div class="form-reservation padd-100">
						<span class="section-suptitle">
							Meja Anda
						</span>
						<h2 class="section-title white-font">
							Reservasi Sekarang!
						</h2>
						<form action="#" method="post">
							<div class="column">
								<span>
									<input type="text" name="name" placeholder="Nama">
								</span>
								<span>
									<input type="text" name="contact_number" placeholder="Nomor Kontak">
								</span>
							</div>
							<div class="column">
								<span>
									<input type="text" name="email" placeholder="Alamat Email">
								</span>
								<span>
									<input type="text" name="num_person" placeholder="Jumlah Orang">
								</span>
							</div>
							<div class="column">
								<span>
									<input type="text" name="book_date" placeholder="Tanggal Pemesanan">
									<i class="fa fa-calendar" aria-hidden="true"></i>
								</span>
								<span>
									<input type="text" name="your_time" placeholder="Waktu Anda">
									<i class="fa fa-clock-o" aria-hidden="true"></i>
								</span>
							</div>
							<div class="column">
								<textarea name="message" placeholder="Pesan Permintaan"></textarea>
							</div>
							<div class="submit-btn">
								<button type="submit">Pesan Sekarang</button>
								<input type="hidden" class="num_table" value="">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Section Reservation -->

	<!-- Section Delas -->
	<section id="delas" class="padd-100">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<span class="section-suptitle text-center">Penawaran Hari Ini</span>
					<h2 class="section-title sep-type-2 text-center">
					Menu Spesial Hari Ini
					</h2>
					<div class="delas-carousel">
						<div class="delas-item">
							<img src="assets/img/demo/menu/coffee/mocha.webp" alt="mocha_coffee" class="" height="300" max-width="100%">
							<h4>Mocha Coffee</h4>
							<p>
								Campuran espresso, cokelat, dan susu dengan rasa manis dan sedikit pahit.
							</p>
							<span>Hanya 60K</span>
						</div>
						<div class="delas-item">
							<img src="assets/img/demo/menu/coffee/cold-brew.webp" alt="cold_brew" class="" height="300" max-width="100%">
							<h4>Cold Brew</h4>
							<p>
								Kopi yang diseduh dalam air dingin selama beberapa jam, seringkali disajikan dengan es.
							</p>
							<span>Hanya 60K</span>
						</div>
						<div class="delas-item">
							<img src="assets/img/demo/menu/non-coffee/matcha-latte.webp" alt="matcha_latte" class="" height="300" max-width="100%">
							<h4>Matcha Latte</h4>
							<p>
								Teh hijau bubuk dicampur dengan susu, kaya akan rasa matcha.
							</p>
							<span>Hanya 75K</span>
						</div>
						<div class="delas-item">
							<img src="assets/img/demo/menu/light-dish/croissant.webp" alt="croissant_cake" class="" height="300" max-width="100%">
							<h4>Croissant</h4>
							<p>
								Pastry ringan yang cocok sebagai pendamping kopi.
							</p>
							<span>Hanya 30K</span>
						</div>
						<div class="delas-item">
							<img src="assets/img/demo/menu/dessert/waffle.webp" alt="waffle" class="" height="300" max-width="100%">
							<h4>Waffle</h4>
							<p>
								Hidangan pencuci mulut dengan toping manis seperti buah, sirup, atau es krim.
							</p>
							<span>Hanya 75K</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Section Delas -->

	<!-- Section Restaurant Menu -->
	<section id="restaurant-menu" class="padd-100">
		<span class="section-suptitle text-center">Coffee Lover</span>
		<h2 class="section-title sep-type-2 text-center">
			Pilihan ada di tanganmu
		</h2>

		<div class="container">
			<div class="row">
				<ul class="restaurant-filter">
					<li><a href="" class="current" data-filter="">Semua menu</a></li>
					<li><a href="" data-filter="coffee">coffee</a></li>
					<li><a href="" data-filter="non-coffee">non-coffee</a></li>
					<li><a href="" data-filter="light-dish">light-dish</a></li>
					<li><a href="" data-filter="dessert">dessert</a></li>
				</ul>
				<div class="restaurant-list">
					<div class="grid-sizer col-sm-6 col-md-4"></div>
					<div class="col-sm-6 col-md-4 grid-item" data-filter="coffee">
						<div>
							<a href="menu.php" target="_blank" style="height:250px;"><img src="assets/img/demo/menu/coffee/espresso.webp" alt="espresso"></a>
							<span>Hanya 30K</span>
							<h3>Espresso Coffee</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 grid-item" data-filter="coffee">
						<div>
							<a href="menu.php" target="_blank" style="height:250px;"><img src="assets/img/demo/menu/coffee/americano.webp" alt="americano"></a>
							<span>Hanya 35K</span>
							<h3>Americano Coffee</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 grid-item" data-filter="coffee">
						<div>
							<a href="menu.php" target="_blank" style="height:250px;"><img src="assets/img/demo/menu/coffee/cappuccino.webp" alt="cappuccino"></a>
							<span>Hanya 45K</span>
							<h3>Cappuccino Coffee</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 grid-item" data-filter="coffee">
						<div>
							<a href="menu.php" target="_blank" style="height:250px;"><img src="assets/img/demo/menu/coffee/latte.webp" alt="latte"></a>
							<span>Hanya 50K</span>
							<h3>Latte Coffee</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 grid-item" data-filter="coffee">
						<div>
							<a href="menu.php" target="_blank" style="height:250px;"><img src="assets/img/demo/menu/coffee/macchiato.webp" alt="macchiato"></a>
							<span>Hanya 45K</span>
							<h3>Macchiato Coffee</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 grid-item" data-filter="coffee">
						<div>
							<a href="menu.php" target="_blank" style="height:250px;"><img src="assets/img/demo/menu/coffee/mocha.webp" alt="mocha"></a>
							<span>Hanya 60K</span>
							<h3>Mocha Coffee</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 grid-item" data-filter="coffee">
						<div>
							<a href="menu.php" target="_blank" style="height:250px;"><img src="assets/img/demo/menu/coffee/cold-brew.webp" alt="cold-brew"></a>
							<span>Hanya 60K</span>
							<h3>Cold Brew Coffee</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 grid-item" data-filter="coffee">
						<div>
							<a href="menu.php" target="_blank" style="height:250px;"><img src="assets/img/demo/menu/coffee/iced-coffee.webp" alt="iced-coffee"></a>
							<span>Hanya 45K</span>
							<h3>Iced Coffee</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 grid-item" data-filter="non-coffee">
						<div>
							<a href="menu.php" target="_blank" style="height:250px;"><img src="assets/img/demo/menu/non-coffee/tea.webp" alt="tea"></a>
							<span>Hanya 30K</span>
							<h3>Tea</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 grid-item" data-filter="non-coffee">
						<div>
							<a href="menu.php" target="_blank" style="height:250px;"><img src="assets/img/demo/menu/non-coffee/matcha-latte.webp" alt="matcha-latte"></a>
							<span>Hanya 60K</span>
							<h3>Matcha Latte</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 grid-item" data-filter="non-coffee">
						<div>
							<a href="menu.php" target="_blank" style="height:250px;"><img src="assets/img/demo/menu/non-coffee/chai.webp" alt="chai-latte"></a>
							<span>Hanya 50K</span>
							<h3>Chai Latte</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 grid-item" data-filter="non-coffee">
						<div>
							<a href="menu.php" target="_blank" style="height:250px;"><img src="assets/img/demo/menu/non-coffee/smoothie.webp" alt="iced-coffee"></a>
							<span>Hanya 75K</span>
							<h3>Smoothie</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 grid-item" data-filter="non-coffee">
						<div>
							<a href="menu.php" target="_blank" style="height:250px;"><img src="assets/img/demo/menu/non-coffee/soda.webp" alt="soda"></a>
							<span>Hanya 60K</span>
							<h3>Soda</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 grid-item" data-filter="light-dish">
						<div>
							<a href="menu.php" target="_blank" style="height:250px;"><img src="assets/img/demo/menu/light-dish/croissant.webp" alt="croissant"></a>
							<span>Hanya 30K</span>
							<h3>Croissant</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 grid-item" data-filter="light-dish">
						<div>
							<a href="menu.php" target="_blank" style="height:250px;"><img src="assets/img/demo/menu/light-dish/cheesecake.webp" alt="cheesecake"></a>
							<span>Hanya 60K</span>
							<h3>Cheese Cake</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 grid-item" data-filter="light-dish">
						<div>
							<a href="menu.php" target="_blank" style="height:250px;"><img src="assets/img/demo/menu/light-dish/brownies.webp" alt="brownies"></a>
							<span>Hanya 60K</span>
							<h3>Brownies</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 grid-item" data-filter="light-dish">
						<div>
							<a href="menu.php" target="_blank" style="height:250px;"><img src="assets/img/demo/menu/light-dish/donut.webp" alt="donut"></a>
							<span>Hanya 30K</span>
							<h3>Donat</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 grid-item" data-filter="light-dish">
						<div>
							<a href="menu.php" target="_blank" style="height:250px;"><img src="assets/img/demo/menu/light-dish/scone.webp" alt="scone"></a>
							<span>Hanya 45K</span>
							<h3>Scone</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 grid-item" data-filter="light-dish">
						<div>
							<a href="menu.php" target="_blank" style="height:250px;"><img src="assets/img/demo/menu/light-dish/tiramisu.webp" alt="tiramisu"></a>
							<span>Hanya 60K</span>
							<h3>Tiramisu</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 grid-item" data-filter="dessert">
						<div>
							<a href="menu.php" target="_blank" style="height:250px;"><img src="assets/img/demo/menu/dessert/ice-cream.webp" alt="ice-cream"></a>
							<span>Hanya 45K</span>
							<h3>Ice Cream</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 grid-item" data-filter="dessert">
						<div>
							<a href="menu.php" target="_blank" style="height:250px;"><img src="assets/img/demo/menu/dessert/pancake.webp" alt="pancake"></a>
							<span>Hanya 75K</span>
							<h3>Pancake</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 grid-item" data-filter="dessert">
						<div>
							<a href="menu.php" target="_blank" style="height:250px;"><img src="assets/img/demo/menu/dessert/parfait.webp" alt="parfait"></a>
							<span>Hanya 45K</span>
							<h3>Parfait</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 grid-item" data-filter="dessert">
						<div>
							<a href="menu.php" target="_blank" style="height:250px;"><img src="assets/img/demo/menu/dessert/pudding.webp" alt="pudding"></a>
							<span>Hanya 45K</span>
							<h3>Pudding</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 grid-item" data-filter="dessert">
						<div>
							<a href="menu.php" target="_blank" style="height:250px;"><img src="assets/img/demo/menu/dessert/waffle.webp" alt="waffle"></a>
							<span>Hanya 75K</span>
							<h3>Waffle</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Section Restaurant Menu -->

	<!-- Section Testimonials -->
	<section id="testimonials" class="padd-100 parallax-window" data-background="assets/img/demo/bg/03.jpg">
		<span class="section-suptitle text-center">
			Coffee Lover
		</span>
		<h2 class="section-title white-font sep-type-2 text-center">
			Ulasan Balik Kustomer
		</h2>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 no-padd">
					<ul class="testimonial-list">
						<li>
							<div>
								<p>
									Tempat ini sungguh nyaman untuk menikmati kopi sambil bekerja atau sekadar bersantai. Kopinya enak dan aromanya menggugah selera, benar-benar tempat favorit saya di kota ini!
								</p>
								<span>Maya</span>
							</div>
							<img src="assets/img/demo/testimonials/04.jpg" alt="" class="img-responsive">
						</li>
						<li>
							<div>
								<p>
									Barista di sini ramah dan tahu benar cara menyajikan kopi berkualitas. Setiap kunjungan selalu memberikan pengalaman yang berbeda, terutama dengan menu musiman yang kreatif!
								</p>
								<span>Andi</span>
							</div>
							<img src="assets/img/demo/testimonials/04.jpg" alt="" class="img-responsive">
						</li>
						<li>
							<div>
								<p>
									Saya bukan hanya datang untuk kopinya, tetapi juga untuk suasana dan pelayanannya. Setiap kunjungan ke Kedai Kopi serasa pulang ke rumah, tempat yang penuh kehangatan dan rasa autentik.
								</p>
								<span>Rika</span>
							</div>
							<img src="assets/img/demo/testimonials/03.jpg" alt="" class="img-responsive">
						</li>
						<li>
							<div>
								<p>
									Saya sangat menghargai dedikasi Kedai Kopi dalam menjaga kualitas setiap sajian. Dari espresso yang pekat hingga latte yang lembut, setiap rasa terasa sangat otentik dan memuaskan.
								</p>
								<span>Budi</span>
							</div>
							<img src="assets/img/demo/testimonials/01.jpg" alt="" class="img-responsive">
						</li>
						<li>
							<div>
								<p>
									Kedai Kopi ini selalu jadi pilihan pertama saya untuk berkumpul bersama teman-teman. Dengan pilihan kopi dan camilan yang beragam, suasananya sungguh menyenangkan dan bikin betah berlama-lama.
								</p>
								<span>Sinta</span>
							</div>
							<img src="assets/img/demo/testimonials/04.jpg" alt="" class="img-responsive">
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- End Section Testimonials -->

	<!-- Section Event -->
	<section id="events" class="padd-100">
		<span class="section-suptitle text-center">
			Akhir Bulan
		</span>
		<h2 class="section-title sep-type-2 text-center">
			Event Mendatang
		</h2>
		<div class="container">
			<div class="row">
				<div class="col-sm-12  no-padd">
					<ul class="event-carousel">
						<li class="event-item">
							<img src="assets/img/demo/menu/event/pumpkin-spice-latte.webp" alt="pumpkin-spice-latte" class="" width="100%" height="250">
							<div>
								<h3>Pumpkin Spice Latte</h3>
								<span>18 Mar 2024</span>
								<p>
									Pumpkin Spice Latte adalah perpaduan kopi espresso, susu, sirup labu, dan rempah-rempah seperti kayu manis, pala, cengkeh, dan jahe. Rasanya manis dan hangat, cocok untuk suasana yang cozy.
								</p>
								<a href="">Baca lebih</a>
							</div>
						</li>
						<li class="event-item">
							<img src="assets/img/demo/menu/event/peppermint-mocha.webp" alt="peppermint-mocha" class="" width="100%" height="250">
							<div>
								<h3>Peppermint Mocha</h3>
								<span>18 Mar 2024</span>
								<p>
									Peppermint Mocha adalah kombinasi dari espresso, susu, cokelat, dan sirup peppermint. Rasa mint yang segar berpadu dengan cokelat yang manis menciptakan nuansa liburan yang menyenangkan.
								</p>
								<a href="">Baca Lebih</a>
							</div>
						</li>
						<li class="event-item">
							<img src="assets/img/demo/menu/event/rose-latte.webp" alt="rose-latte" class="" width="100%" height="250">
							<div>
								<h3>Rose Latte</h3>
								<span>18 Mar 2024</span>
								<p>
									Rose Latte adalah kopi latte yang diberi sirup mawar, memberikan rasa floral yang lembut dan aroma yang wangi. Biasanya, minuman ini juga diberi kelopak mawar kering sebagai hiasan di atasnya. Rose Latte menciptakan nuansa yang elegan dan romantis.
								</p>
								<a href="">Baca Lebih</a>
							</div>
						</li>
						<li class="event-item">
							<img src="assets/img/demo/menu/event/salted-caramel.webp" alt="" class="" width="100%" height="250">
							<div>
								<h3>Salted Caramel Latte</h3>
								<span>18 Mar 2024</span>
								<p>
									Salted Caramel Latte adalah perpaduan espresso dengan sirup caramel dan sedikit garam laut, memberikan rasa manis yang berpadu sempurna dengan sedikit rasa asin. Biasanya, minuman ini disajikan dengan whipped cream dan saus caramel di atasnya.
								</p>
								<a href="">Baca Lebih</a>
							</div>
						</li>
						<li class="event-item">
							<img src="assets/img/demo/menu/event/sakura-latte.webp" alt="" class="" width="100%" height="250">
							<div>
								<h3>Sakura Latte</h3>
								<span>18 Mar 2024</span>
								<p>
									Cherry Blossom Latte sering hadir di musim semi, terutama di negara yang merayakan mekarnya bunga sakura. Latte ini memiliki sirup beraroma cherry blossom atau bunga sakura, memberikan rasa floral yang lembut dan manis, serta warna merah muda yang cantik.
								</p>
								<a href="">Baca Lebih</a>
							</div>
						</li>
						<li class="event-item">
							<img src="assets/img/demo/menu/event/eggnog.webp" alt="" class="" width="100%" height="250">
							<div>
								<h3>Eggnog Latte</h3>
								<span>18 Mar 2024</span>
								<p>
									Eggnog Latte adalah perpaduan espresso dengan eggnog, minuman tradisional Natal yang terbuat dari susu, telur, dan rempah-rempah. Rasanya creamy, manis, dan sedikit spicy, menciptakan nuansa hangat yang identik dengan liburan.
								</p>
								<a href="">Baca Lebih</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- End Section Events -->

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

	<!-- Content End -->
	<?= $Footer; ?>
</body>

</html>