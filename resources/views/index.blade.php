<!DOCTYPE html>
<html lang="en">
<head>
<title>FishGO</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="aStar Fashion Template Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/styles/bootstrap-4.1.3/bootstrap.css') }}">
<link href="{{ asset('/css/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ url('/css/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('/css/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('/css/plugins/OwlCarousel2-2.2.1/animate.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('/css/styles/main_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('/css/styles/responsive.css') }}">
<link rel="stylesheet" href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css') }}">
<link rel='stylesheet' href="{{ url('https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons') }}">
<link rel="stylesheet" href="{{ url('/css/css/style.css') }}">
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
						<div class="cart_num">3</div>
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


<!-- WEB  VIEW -->



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
				<div class="cart_num">3</div>
			</a></div>
			<div class="cart_text">bag</div>
			<div class="cart_price">Rp.150000 (1)</div>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		
		<!-- Home Slider -->
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style='background-image: url(/images/makarel.jpg);'></div>
					<div class="home_content_container">
						<div class="home_content">
							<div class="home_discount d-flex flex-row align-items-end justify-content-start">
								<div class="home_discount_num">20</div>
								<div class="home_discount_text">Discount</div>
							</div>
							<div class="home_title">Pengguna Baru</div>
							<div class="button button_1 home_button trans_200"><a href="categories.html">Belanja Sekarang</a></div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style='background-image: url(/images/payangan.jpg);' ></div>
					<div class="home_content_container" id="payangan">
						<div class="home_content">
							<div class="home_discount d-flex flex-row align-items-end justify-content-start">
								<div class="home_discount_num" style="color: white">20</div>
								<div class="home_discount_text" style="color: white">Discount</div>
							</div>
							<div class="home_title" style="color: white">All Ikan Payangan</div>
							<div class="button button_1 home_button trans_200"><a href="categories.html">Belanja Sekarang!</a></div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style='background-image: url(/images/puger.jpg);'></div>
					<div class="home_content_container">
						<div class="home_content" id="payangan">
							<div class="home_discount d-flex flex-row align-items-end justify-content-start">
								<div class="home_discount_num" style="color: white">20%</div>
								<div class="home_discount_text" style="color: white">Discount</div>
							</div>
							<div class="home_title" style="color: white">All Ikan Puger</div>
							<div class="button button_1 home_button trans_200"><a href="categories.html">Belanja Sekarang!</a></div>
						</div>
					</div>
				</div>

			</div>
				
			<!-- Home Slider Navigation -->
			<div class="home_slider_nav home_slider_prev trans_200"><div class=" d-flex flex-column align-items-center justify-content-center"><img src="images/prev.png" alt=""></div></div>
			<div class="home_slider_nav home_slider_next trans_200"><div class=" d-flex flex-column align-items-center justify-content-center"><img src="images/next.png" alt=""></div></div>

		</div>
	</div>

	<!-- Boxes -->
	
	<div class="boxes">
		<div class="section_container">
			<div class="container">
				<div class="row">
					
					<!-- Box -->
					<div class="col-lg-4 box_col">
						<div class="box">
							<div class="box_image"><img src="images/tuna.jpeg" alt=""></div>
							<div class="box_title trans_200"><a href="categories.html">spesial tuna</a></div>
						</div>
					</div>

					<!-- Box -->
					<div class="col-lg-4 box_col">
						<div class="box">
							<div class="box_image"><img src="images/sarden.png" alt=""></div>
							<div class="box_title trans_200"><a href="categories.html">spesial sarden</a></div>
						</div>
					</div>

					<!-- Box -->
					<div class="col-lg-4 box_col">
						<div class="box">
							<div class="box_image"><img src="images/tongkol_2.png" alt=""></div>
							<div class="box_title trans_200"><a href="categories.html">Spesial Tongkol</a></div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Categories -->

	<div class="categories">
		<div class="section_container">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<div class="categories_list_container">
							<ul class="categories_list d-flex flex-row align-items-center justify-content-start">
								<li><a href="categories.html">new arrivals</a></li>
								<li><a href="categories.html">recommended</a></li>
								<li><a href="categories.html">more protein</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Products -->

	<div class="products">
		<div class="section_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="products_container grid">
							
							<!-- Product -->
							<div class="product grid-item hot">
								<div class="product_inner">
									<div class="product_image">
										<img src="images/kakapmerah_1.jpg" alt="">
										<div class="product_tag">hot</div>
									</div>
									<div class="product_content text-center">
										<div class="product_title"><a href="/product">Kakap Merah! Puger</a></div>
										<div class="product_price">Rp.15000</div>
										<div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
									</div>
								</div>	
							</div>

							<!-- Product -->
							<div class="product grid-item">
								<div class="product_inner">
									<div class="product_image"><img src="images/kakapmerah_1.jpg" alt=""></div>
									<div class="product_content text-center">
										<div class="product_title"><a href="product.html">hype grey shirt</a></div>
										<div class="product_price">$19.50</div>
										<div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
									</div>
								</div>	
							</div>

							<!-- Product -->
							<div class="product grid-item sale">
								<div class="product_inner">
									<div class="product_image">
										<img src="images/kakapmerah_1.jpg" alt="">
										<div class="product_tag">sale</div>
									</div>
									<div class="product_content text-center">
										<div class="product_title"><a href="product.html">long sleeve jacket</a></div>
										<div class="product_price">$32.20<span>RRP 64.40</span></div>
										<div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
									</div>
								</div>	
							</div>

							<!-- Product -->
							<div class="product grid-item">
								<div class="product_inner">
									<div class="product_image">
										<img src="images/kakapmerah_1.jpg" alt="">
									</div>
									<div class="product_content text-center">
										<div class="product_title"><a href="product.html">denim men shirt</a></div>
										<div class="product_price">$59.90</div>
										<div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
									</div>
								</div>	
							</div>

							<!-- Product -->
							<div class="product grid-item">
								<div class="product_inner">
									<div class="product_image">
										<img src="images/kakapmerah_1.jpg" alt="">
									</div>
									<div class="product_content text-center">
										<div class="product_title"><a href="product.html">long red shirt</a></div>
										<div class="product_price">$79.90</div>
										<div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
									</div>
								</div>	
							</div>

							<!-- Product -->
							<div class="product grid-item new">
								<div class="product_inner">
									<div class="product_image">
										<img src="images/kakapmerah_1.jpg" alt="">
										<div class="product_tag">new</div>
									</div>
									<div class="product_content text-center">
										<div class="product_title"><a href="product.html">hype grey shirt</a></div>
										<div class="product_price">$59.90</div>
										<div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
									</div>
								</div>	
							</div>

							<!-- Product -->
							<div class="product grid-item">
								<div class="product_inner">
									<div class="product_image">
										<img src="images/kakapmerah_1.jpg" alt="">
									</div>
									<div class="product_content text-center">
										<div class="product_title"><a href="product.html">long sleeve jacket</a></div>
										<div class="product_price">$15.90</div>
										<div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
									</div>
								</div>	
							</div>

							<!-- Product -->
							<div class="product grid-item sale">
								<div class="product_inner">
									<div class="product_image">
										<img src="images/kakapmerah_1.jpg" alt="">
										<div class="product_tag">sale</div>
									</div>
									<div class="product_content text-center">
										<div class="product_title"><a href="product.html">denim men shirt</a></div>
										<div class="product_price">$43.99<span>RRP 64.40</span></div>
										<div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
									</div>
								</div>	
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