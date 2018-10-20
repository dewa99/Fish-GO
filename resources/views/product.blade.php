<!DOCTYPE html>
<html lang="en">
<head>
<title>Product</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="aStar Fashion Template Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/styles/bootstrap-4.1.3/bootstrap.css') }}">
<link href="{{ asset('/css/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ url('/css/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('/css/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('/css/plugins/OwlCarousel2-2.2.1/animate.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('/css/styles/product.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('/css/styles/product_responsive.css') }}">
</head>
<body>

<div class="super_container">

	<!-- Header -->

<!-- MOBILE VIEW-->

	<header class="header">
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			
			<!-- Hamburger -->
			<div class="hamburger menu_mm"><i class="fa fa-bars menu_mm" aria-hidden="true"></i></div>

			<!-- Logo -->
			<div class="header_logo">
				<a href="#"><div>FISH<span>GO</span></div></a>
			</div>

			<!-- Navigation -->
			<nav class="header_nav">
				<ul class="d-flex flex-row align-items-center justify-content-start">
				<li><a href="/">home</a></li>
				<li><a href="#">kategori</a></li>
				<li><a href="#">contact</a></li>
				<li><a href="/daftarfish">daftar</a></li>
				<li><a href="/loginfish">login </a></li>
				</ul>
			</nav>

			<!-- Header Extra -->
			<div class="header_extra ml-auto d-flex flex-row align-items-center justify-content-start">


				<!-- Cart -->
				<div class="cart d-flex flex-row align-items-center justify-content-start">
					<div class="cart_icon"><a href="cart.html">
						<img src="images/bag.png" alt="">
						<div class="cart_num">2</div>
					</a></div>
				</div>

			</div>

		</div>
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-start justify-content-start menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="menu_top d-flex flex-row align-items-center justify-content-start">


		

		</div>
		<div class="menu_search">
			<form action="#" class="header_search_form menu_mm">
				<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="/">home</a></li>
				<li class="menu_mm"><a href="#">kategori</a></li>
				<li class="menu_mm"><a href="#">contact</a></li>
				<li class="menu_mm"><a href="/daftarfish">daftar</a></li>
				<li class="menu_mm"><a href="/loginfish">login </a></li>
				
			</ul>
		</nav>
		<div class="menu_extra">
			<div class="menu_social">
				<ul>
					<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
	
	<!-- Sidebar -->

	<div class="sidebar">
		
		<!-- Info -->
		<div class="info">
			<div class="info_content d-flex flex-row align-items-center justify-content-start">

			</div>
		</div>

		<!-- Logo -->
		<div class="sidebar_logo">
			<a href="#"><div>Fish<span>GO</span></div></a>
		</div>

		<!-- Sidebar Navigation -->
		<nav class="sidebar_nav">
			<ul>
				<li><a href="/">home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li><a href="#">kategori<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li><a href="#">contact<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li><a href="/daftarfish">daftar<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li><a href="/loginfish">login<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				
		</nav>

		<!-- Search -->
		<div class="search">
			<form action="#" class="search_form" id="sidebar_search_form">
				<input type="text" class="search_input" placeholder="Search" required="required">
				<button class="search_button"><i class="fa fa-search" aria-hidden="true"></i></button>
			</form>
		</div>

		<!-- Cart -->
		<div class="cart d-flex flex-row align-items-center justify-content-start">
			<div class="cart_icon"><a href="cart.html">
				<img src="images/bag.png" alt="">
				<div class="cart_num">2</div>
			</a></div>
			<div class="cart_text">bag</div>
			<div class="cart_price">Rp.150000 (1)</div>
		</div>
	</div>

<!-- WEB VIEW -->


	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/Shop.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="home_content">
				<div class="home_title">Pasar Ikan</div>
				<div class="breadcrumbs">
					<ul class="d-flex flex-row align-items-center justify-content-start">
						<li><a href="index.html">Home</a></li>
						<li><a href="categories.html">Kakap</a></li>
						<li>Kakap Merah</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- Products -->

	<div class="product">
		<!-- Product Content -->
		<div class="section_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="product_content_container d-flex flex-lg-row flex-column align-items-start justify-content-start">
							<div class="product_content order-lg-1 order-2">
								<div class="product_content_inner">
									<div class="product_image_row d-flex flex-md-row flex-column align-items-md-end align-items-start justify-content-start">
										<div class="product_image_1 product_image">
											<img src="images/kakap.jpg" alt="">
										</div>
										<div class="product_image_2 product_image"><img src="images/kakap.jpg" alt=""></div>
									</div>
									<div class="product_image_row">
										<div class="product_image_3 product_image"><img src="images/kakap.jpg" alt=""></div>
									</div>
									<div class="product_image_row d-flex flex-md-row flex-column align-items-start justify-content-start">
										<div class="product_image_4 product_image"><img src="images/kakap.jpg" alt=""></div>
										<div class="product_image_5 product_image"><img src="images/kakap.jpg" alt=""></div>
									</div>
								</div>
							</div>
							<div class="product_sidebar order-lg-2 order-1">
								<form action="#" id="product_form" class="product_form">
									<div class="product_name">Kakap Merah</div>
									<div class="product_price">Rp.15000</div>
									<div class="product_color">Pantai Payangan Jember</div>
									<div class="product_size">
										<div class="product_size_title">Quantity</div>
										<div class="product_size_list">
											<ul>
												<li class="size_available">
													<input type="radio" id="radio_1" name="product_radio" class="regular_radio radio_1">
													<label for="radio_1">5</label>
												</li>
												<li class="size_available">
													<input type="radio" id="radio_2" name="product_radio" class="regular_radio radio_2">
													<label for="radio_2">10</label>
												</li>
												<li class="size_available">
													<input type="radio" id="radio_3" name="product_radio" class="regular_radio radio_3">
													<label for="radio_3">15</label>
												</li>
												<li class="size_available">
													<input type="radio" id="radio_4" name="product_radio" class="regular_radio radio_4">
													<label for="radio_4">20</label>
												</li>
												<li>
													<input type="text" name="c_quantity" class="search_input" style="color: black">
													Pesan Khusus
												</li>
											</ul>
										</div>
									</div>
									<button class="cart_button trans_200">add to cart</button>
									<div class="similar_products_button trans_200"><a href="#">Pre Order</a></div>
									<div class="product_color">stok :<span>10</span></div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="footer_content">
			<div class="section_container">
				<div class="container">
					<div class="row">
						
						<!-- About -->
						<div class="col-xxl-3 col-md-6 footer_col">
							<div class="footer_about">
								<!-- Logo -->
								<div class="footer_logo">
									<a href="#"><div>Fish<span>GO</span></div></a>
								</div>
								<div class="footer_about_text">
									<p>Toko online ikan segala jenis di Pantai Jember, mulai dari Tuna,Makarel,Tongkol dan lain - lain</p>
								</div>
								
							</div>
						</div>

						<!-- Questions -->
						<div class="col-xxl-3 col-md-6 footer_col">
							<div class="footer_questions">
								<div class="footer_title">questions</div>
								<div class="footer_list">
									<ul>
										<li><a href="#">About us</a></li>
										<li><a href="#">Track Orders</a></li>
										<li><a href="#">Returns</a></li>
										<li><a href="#">Shipping</a></li>
										<li><a href="#">Partners</a></li>
										<li><a href="#">Bloggers</a></li>
										<li><a href="#">Support</a></li>
										<li><a href="#">Terms of Use</a></li>
									</ul>
								</div>
							</div>
						</div>

						

						<!-- Contact -->
						<div class="col-xxl-3 col-md-6 footer_col">
							<div class="footer_contact">
								<div class="footer_title">contact</div>
								<div class="footer_contact_list">
									<ul>
										<li class="d-flex flex-row align-items-start justify-content-start"><span>C.</span><div>FishGO</div></li>
										<li class="d-flex flex-row align-items-start justify-content-start"><span>A.</span><div>Jenggawah Jember</div></li>
										<li class="d-flex flex-row align-items-start justify-content-start"><span>T.</span><div>+8224556778</div></li>
										<li class="d-flex flex-row align-items-start justify-content-start"><span>E.</span><div>johnPK@gmail.com</div></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Social -->
		<div class="footer_social">
			<div class="section_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="footer_social_container d-flex flex-row align-items-center justify-content-between">
								<!-- Instagram -->
								<a href="#">
									<div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
										<div class="footer_social_icon"><i class="fa fa-instagram" aria-hidden="true"></i></div>
										<div class="footer_social_title">instagram</div>
									</div>
								</a>
								<!-- Google + -->
								<a href="#">
									<div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
										<div class="footer_social_icon"><i class="fa fa-google-plus" aria-hidden="true"></i></div>
										<div class="footer_social_title">google +</div>
									</div>
								</a>
								
								<!-- Facebook -->
								<a href="#">
									<div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
										<div class="footer_social_icon"><i class="fa fa-facebook" aria-hidden="true"></i></div>
										<div class="footer_social_title">facebook</div>
									</div>
								</a>
								<!-- Twitter -->
								<a href="#">
									<div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
										<div class="footer_social_icon"><i class="fa fa-twitter" aria-hidden="true"></i></div>
										<div class="footer_social_title">twitter</div>
									</div>
								</a>
								
							</div>
						</div>
					</div>
				</div>
			</div>				
		</div>

	</footer>	
		

</div>

<script src="{{ asset('/js/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('/js/styles/bootstrap-4.1.3/popper.js') }}"></script>
<script src="{{ asset('/js/styles/bootstrap-4.1.3/bootstrap.min.js') }}"></script>
<script src="{{ asset('/js/plugins/greensock/TweenMax.min.js') }}"></script>
<script src="{{ asset('/js/plugins/greensock/TimelineMax.min.js') }}"></script>
<script src="{{ asset('/js/plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
<script src="{{ asset('/js/plugins/greensock/animation.gsap.min.js') }}"></script>
<script src="{{ asset('/js/plugins/greensock/ScrollToPlugin.min.js') }}"></script>
<script src="{{ asset('/js/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
<script src="{{ asset('/js/plugins/easing/easing.js') }}"></script>
<script src="{{ asset('/js/plugins/parallax-js-master/parallax.min.js') }}"></script>
<script src="{{ asset('/js/plugins/Isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('/js/plugins/Isotope/fitcolumns.js') }}"></script>
<script src="{{ asset('/js/js/custom.js') }}"></script>
</body>
</html>