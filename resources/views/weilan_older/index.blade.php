<!DOCTYPE html>
<html lang='zh-CN'>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>首页</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
		<!-- CSS -->
		{{--  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700,800%7CLato:300,400,700" rel="stylesheet" type="text/css">  --}}
        <link href="{{ asset('assets/css/google_api.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('assets/css/ionicons.css') }}" rel="stylesheet" type="text/css">
		<!-- carousel -->
		<link href="{{ asset('assets/css/owl.carousel.css') }}" rel="stylesheet" type="text/css">
		<!--Light box-->
		<link href="{{ asset('assets/css/jquery.fancybox.css') }}" rel="stylesheet" type="text/css">
		<!-- Revolution Style-sheet -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/rs-slider/rs-plugin/css/settings.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/rev-style.css') }}">
		<!--Main Style-->
		<link href="{{ asset('assets/css/navigation.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">

	<!--Theme Color-->
<link href="{{ asset('assets/css/theme-color/default.css') }}" rel="stylesheet" id="theme-color" type="text/css">
</head>
	<body class="full-intro background--dark">
		<!--loader-->
		<div id="preloader">
			<div class="sk-circle">
				<div class="sk-circle1 sk-child"></div>
				<div class="sk-circle2 sk-child"></div>
				<div class="sk-circle3 sk-child"></div>
				<div class="sk-circle4 sk-child"></div>
				<div class="sk-circle5 sk-child"></div>
				<div class="sk-circle6 sk-child"></div>
				<div class="sk-circle7 sk-child"></div>
				<div class="sk-circle8 sk-child"></div>
				<div class="sk-circle9 sk-child"></div>
				<div class="sk-circle10 sk-child"></div>
				<div class="sk-circle11 sk-child"></div>
				<div class="sk-circle12 sk-child"></div>
			</div>
		</div>
		<!--loader-->
		<!-- Site Wraper -->
		<div class="wrapper">
			<!-- HEADER -->
			<header class="header">
				<div class="container">
					<!-- logo -->
					<div class="logo">
						<a href="{{ url('/') }}"> <img class="l-white" src="{{asset('assets/images/logo.png')}}" alt=""> <img class="l-black" src="{{asset('assets/images/logo-black.png')}}" alt=""> </a>
					</div>
					<!--End logo-->
					<!-- Navigation Menu -->
					<nav class='navigation'>
						<ul>
							<li><a href="{{ url('/') }}">Home</a></li>
							<li><a href="services.html">Services</a></li>
							<li><a href="shop.html">Shop</a></li>
							<li><a href="shop-details.html">shop details</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</nav>
					<!--End Navigation Menu -->
				</div>
			</header>
			<!-- END HEADER -->
			<!--  Main Banner Start Here-->
			<!-- Intro Section -->
			<section class="hero">
				<!--rev slider start-->
				<div class="fullwidthbanner">
					<div class="tp-fullscreen-banner">
						<ul>
							<!-- SLIDE -->
							<li data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Slide 1">
								<!-- MAIN IMAGE -->
								<img src="{{asset('assets/images/slider/slide.jpg')}}"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
								<!-- Transparent Background -->
								<div class="tp-caption dark-translucent-bg"
								data-x="center"
								data-y="bottom"
								data-speed="500"
								data-easing="easeOutQuad"
								data-start="0"></div>
								<div class="caption sfb bold text-center"
								data-x="center"
								data-y="120"
								data-speed="900"
								data-start="800"
								data-easing="Sine.easeOut">
									<h2 class="font-s">We make <span class="text-color"> Awesome </span> Website</h2>
								</div>
								<div class="caption sfb bold  text-center "
								data-x="center"
								data-y="200"
								data-speed="900"
								data-start="1500"
								data-easing="Sine.easeOIn">
									<p class="paragraph-s">
										Lorem Ipsum is simply dummy text of the printing
										<br>
										and typeseatting industry. Lorem Ipsum has been the industry's
									</p>
								</div>
								<div class="caption sfb lowercase-caption text-center"
								data-x="center"
								data-y="280"
								data-speed="1000"
								data-start="2000"
								data-easing="Sine.easeOut">
									<a class="btn-text" href="#">Read more</a>
									<a class="btn-text secondary_bg" href="#">PURCHASE NOW</a>
								</div>
							</li>
							<!-- SLIDE -->
							<!-- SLIDE -->
							<li data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Slide 1">
								<!-- MAIN IMAGE -->
								<img src="{{asset('assets/images/slider/slide1.jpg')}}"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
								<!-- Transparent Background -->
								<div class="tp-caption dark-translucent-bg"
								data-x="center"
								data-y="bottom"
								data-speed="500"
								data-easing="easeOutQuad"
								data-start="0"></div>
								<div class="caption sfb bold text-center"
								data-x="center"
								data-y="120"
								data-speed="900"
								data-start="800"
								data-easing="Sine.easeOut">
									<h2 class="font-s">We make <span class="text-color"> Awesome </span> Website</h2>
								</div>
								<div class="caption sfb bold  text-center "
								data-x="center"
								data-y="200"
								data-speed="900"
								data-start="1500"
								data-easing="Sine.easeOIn">
									<p class="paragraph-s">
										Lorem Ipsum is simply dummy text of the printing
										<br>
										and typeseatting industry. Lorem Ipsum has been the industry's
									</p>
								</div>
								<div class="caption sfb lowercase-caption text-center"
								data-x="center"
								data-y="280"
								data-speed="1000"
								data-start="2000"
								data-easing="Sine.easeOut">
									<a class="btn-text" href="#">Read more</a>
									<a class="btn-text secondary_bg" href="#">PURCHASE NOW</a>
								</div>
							</li>
							<!-- SLIDE -->
							<!-- SLIDE -->
							<li data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Slide 1">
								<!-- MAIN IMAGE -->
								<img src="{{asset('assets/images/slider/slide2.jpg')}}"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
								<!-- Transparent Background -->
								<div class="tp-caption dark-translucent-bg"
								data-x="center"
								data-y="bottom"
								data-speed="500"
								data-easing="easeOutQuad"
								data-start="0"></div>
								<div class="caption sfb bold text-center"
								data-x="center"
								data-y="120"
								data-speed="900"
								data-start="800"
								data-easing="Sine.easeOut">
									<h2 class="font-s">We make <span class="text-color"> Awesome </span> Website</h2>
								</div>
								<div class="caption sfb bold  text-center "
								data-x="center"
								data-y="200"
								data-speed="900"
								data-start="1500"
								data-easing="Sine.easeOIn">
									<p class="paragraph-s">
										Lorem Ipsum is simply dummy text of the printing
										<br>
										and typeseatting industry. Lorem Ipsum has been the industry's
									</p>
								</div>
								<div class="caption sfb lowercase-caption text-center"
								data-x="center"
								data-y="280"
								data-speed="1000"
								data-start="2000"
								data-easing="Sine.easeOut">
									<a class="btn-text" href="#">Read more</a>
									<a class="btn-text secondary_bg" href="#">PURCHASE NOW</a>
								</div>
							</li>
							<!-- SLIDE -->

						</ul>
					</div>
				</div>
				<!--full width banner-->

				<!--revolution end-->
			</section>
			<div class="clearfix"></div>
			<!-- End Intro Section -->
			<!--Our Services-->
			<section id="our-services" class="padding ptb-xs-60 text-center">
				<div class="container">
					<div class="row pb-60">
						<div class="col-sm-12 mb-20">
							<h2><span>Our</span> Services</h2>
							<span class="b-line"></span>
						</div>
					</div>
					<div class="row">

						<div class="col-md-4 col-sm-6">
							<div class="featured-item feature-bg-box mb-100 gray-bg">
								<div class="icon">
									<i class="ion-easel"></i>
								</div>
								<div class="title text-uppercase">
									<h4>BUSINESS PLANNING</h4>
								</div>
								<div class="desc">
									Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus.
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="featured-item feature-bg-box gray-bg mb-100 sub-color_hover">
								<div class="icon">
									<i class="ion-stats-bars sub-color"></i>
								</div>
								<div class="title text-uppercase">
									<h4>MARKETING PLANNING</h4>
								</div>
								<div class="desc">
									Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus.
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="featured-item feature-bg-box gray-bg mb-100">
								<div class="icon">
									<i class="ion-arrow-graph-up-left"></i>
								</div>
								<div class="title text-uppercase">
									<h4> MARKET RESEARCH</h4>
								</div>
								<div class="desc">
									Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus.
								</div>
							</div>
						</div>

						<div class="col-md-4 col-sm-6">
							<div class="featured-item feature-bg-box gray-bg sub-color_hover mb-sm-100">
								<div class="icon">
									<i class="ion-thumbsup sub-color"></i>
								</div>
								<div class="title text-uppercase">
									<h4>Risk Management</h4>
								</div>
								<div class="desc">
									Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus.
								</div>
							</div>
						</div>

						<div class="col-md-4 col-sm-6">
							<div class="featured-item feature-bg-box gray-bg ">
								<div class="icon">
									<i class="ion-pie-graph"></i>
								</div>
								<div class="title text-uppercase">
									<h4>TAXATION SERVICES</h4>
								</div>
								<div class="desc">
									Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus.
								</div>
							</div>
						</div>

						<div class="col-md-4 col-sm-6">
							<div class="featured-item feature-bg-box gray-bg sub-color_hover mb-xs-0 ">
								<div class="icon">
									<i class="ion-help-buoy sub-color"></i>
								</div>
								<div class="title text-uppercase">
									<h4>Suppport Team</h4>
								</div>
								<div class="desc">
									Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus.
								</div>
							</div>
						</div>
					</div>

				</div>
			</section>
			<!--Our Services End -->
			<section id="about_us" class="pt pt-xs-60 img-bg">
				<div class="container">
					<div class="row ">
						<div class="col-sm-5">
							<img src="{{asset('assets/images/1.png')}}" alt="" />
						</div>
						<div class="col-sm-7 pt-80 pt-sm-0 ptb-xs-40">
							<div class="heading-box pb-30 ">
								<h2><span>Our</span> Company</h2>
								<span class="b-line l-left"></span>
							</div>
							<p>
								Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.
							</p>
							<div class="lead-box">
								<p class="lead">
									Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis.
								</p>
							</div>
							<div class="about-text">
								<strong class="text-color">John Smith</strong>
								<span>CEO, Financeco</span>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!--Team Section-->
			<section id="team" class="padding ptb-xs-60">
				<div class="container">
					<div class="row pb-30 text-center">
						<div class="col-sm-12 mb-20">
							<h2><span>Our</span> Team</h2>
							<span class="b-line"></span>
						</div>
					</div>
					<div class="row text-center">
						<div class="col-sm-3 mb-xs-30">
							<div class="box-hover img-scale">
								<figure>
									<img src="{{asset('assets/images/team/team1.jpg')}}" alt="">
								</figure>

								<div class="team-block">
									<strong>Tommy Woodhouse</strong>
									<span>Sales Manager</span>
									<hr class="small-divider border-white">
									<ul class="social-icons">
										<li>
											<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
										</li>
										<li>
											<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
										</li>
										<li>
											<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
										</li>
										<li>
											<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
										</li>
										<li>
											<a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a>
										</li>
									</ul>
								</div>

							</div>
						</div>
						<div class="col-sm-3 mb-xs-30">
							<div class="box-hover img-scale">
								<figure>
									<img src="{{asset('assets/images/team/team2.jpg')}}" alt="">
								</figure>

								<div class="team-block">
									<strong>Danny Burton</strong>
									<span>Senior Designer</span>
									<hr class="small-divider border-white">
									<ul class="social-icons">
										<li>
											<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
										</li>
										<li>
											<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
										</li>
										<li>
											<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
										</li>
										<li>
											<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
										</li>
										<li>
											<a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a>
										</li>
									</ul>
								</div>

							</div>
						</div>
						<div class="col-sm-3 mb-xs-30">
							<div class="box-hover img-scale">
								<figure>
									<img src="{{asset('assets/images/team/team3.jpg')}}" alt="">
								</figure>

								<div class="team-block">
									<strong>Melody Clark</strong>
									<span>UX Specialist</span>
									<hr class="small-divider border-white">
									<ul class="social-icons">
										<li>
											<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
										</li>
										<li>
											<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
										</li>
										<li>
											<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
										</li>
										<li>
											<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
										</li>
										<li>
											<a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-3 mb-xs-30">
							<div class="box-hover img-scale">
								<figure>
									<img src="{{asset('assets/images/team/team4.jpg')}}" alt="">
								</figure>

								<div class="team-block">
									<strong>Elizabeth Jones</strong>
									<span>Art Director</span>
									<hr class="small-divider border-white">
									<ul class="social-icons">
										<li>
											<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
										</li>
										<li>
											<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
										</li>
										<li>
											<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
										</li>
										<li>
											<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
										</li>
										<li>
											<a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>

				</div>
			</section>
			<!--Team Section End-->
			<!--Overlay Block -->
			<section id="overlay_block" class="padding ptb-xs-60 light-color">
				<div class="container text-center padding ptb-xs-60">
					<h1 class="mt-sm">Ready-made for Your Bussines</h1>
					<p class="lead ptb-15">
						Ready to buy now? we can assure you that you won't regret it
					</p>

					<div class="row mt-20">
						<div class="col-sm-12 text-center btn-wrap">
							<a class="btn-text" href="#">View features</a>
							<a class="btn-text secondary_bg" href="#">PURCHASE NOW</a>
						</div>
					</div>
				</div>
			</section>
			<!--Overlay Block End -->
			<!-- Work Section -->
			<section id="work" class="padding ptb-xs-60">
				<div class="container">
					<div class="row pb-30 text-center">
						<div class="col-sm-12 mb-20">
							<h2><span>Our</span> Work</h2>
							<span class="b-line"></span>
						</div>
					</div>
					<!-- work Filter -->
					<div class="row">
						<ul class="container-filter categories-filter">
							<li>
								<a class="categories active" data-filter="*">All</a>
							</li>
							<li>
								<a class="categories" data-filter=".branding">Branding</a>
							</li>
							<li>
								<a class="categories" data-filter=".design">Design</a>
							</li>
							<li>
								<a class="categories" data-filter=".photo">Photo</a>
							</li>
							<li>
								<a class="categories" data-filter=".coffee">coffee</a>
							</li>
						</ul>
					</div>
					<!-- End work Filter -->
					<div class="row container-masonry nf-col-3">

						<div class="nf-item branding coffee spacing">
							<div class="item-box">
								<a href="{{asset('assets/images/portfolio/14.jpg')}}" class="fancylight" data-fancybox-group="light"> <img alt="1" src="{{asset('assets/images/portfolio/14.jpg')}}" class="item-container"> </a>
								<div class="link-zoom">
									<a href="#" class="project_links"> <i class="fa fa-link"> </i> </a>
									<a href="{{asset('assets/images/portfolio/14.jpg')}}" class="fancylight popup-btn" data-fancybox-group="light"> <i class="fa fa-search-plus"></i> </a>
								</div>
								<div class="gallery-heading">
									<h4><a href="#">Financial Services</a></h4>
									<p>
										At vero eos et rebum
									</p>
								</div>
							</div>
						</div>

						<div class="nf-item photo spacing">
							<div class="item-box">
								<a> <img alt="1" src="{{asset('assets/images/portfolio/10.jpg')}}" class="item-container"> </a>
								<div class="link-zoom">
									<a href="#" class="project_links"> <i class="fa fa-link"> </i> </a>
									<a href="{{asset('assets/images/portfolio/10.jpg')}}" class="fancylight popup-btn" data-fancybox-group="light"> <i class="fa fa-search-plus"></i> </a>
								</div>
								<div class="gallery-heading">
									<h4><a href="#">Financial Services</a></h4>
									<p>
										At vero eos et rebum
									</p>
								</div>
							</div>
						</div>

						<div class="nf-item branding photo spacing">
							<div class="item-box">
								<a> <img alt="1" src="{{asset('assets/images/portfolio/17.jpg')}}" class="item-container"> </a>
								<div class="link-zoom">
									<a href="#" class="project_links"> <i class="fa fa-link"> </i> </a>
									<a href="{{asset('assets/images/portfolio/17.jpg')}}" class="fancylight popup-btn" data-fancybox-group="light"> <i class="fa fa-search-plus"></i> </a>
								</div>
								<div class="gallery-heading">
									<h4><a href="#">Financial Services</a></h4>
									<p>
										At vero eos et rebum
									</p>
								</div>
							</div>
						</div>

						<div class="nf-item design spacing">
							<div class="item-box">
								<a> <img alt="1" src="{{asset('assets/images/portfolio/34.jpg')}}" class="item-container"> </a>
								<div class="link-zoom">
									<a href="#" class="project_links"> <i class="fa fa-link"> </i> </a>
									<a href="{{asset('assets/images/portfolio/34.jpg')}}" class="fancylight popup-btn" data-fancybox-group="light"> <i class="fa fa-search-plus"></i> </a>
								</div>
								<div class="gallery-heading">
									<h4><a href="#">Financial Services</a></h4>
									<p>
										At vero eos et rebum
									</p>
								</div>
							</div>
						</div>

						<div class="nf-item photo spacing">
							<div class="item-box">
								<a> <img alt="1" src="{{asset('assets/images/portfolio/32.jpg')}}" class="item-container"> </a>
								<div class="link-zoom">
									<a href="#" class="project_links"> <i class="fa fa-link"> </i> </a>
									<a href="{{asset('assets/images/portfolio/32.jpg')}}" class="fancylight popup-btn" data-fancybox-group="light"> <i class="fa fa-search-plus"></i> </a>
								</div>
								<div class="gallery-heading">
									<h4><a href="#">Financial Services</a></h4>
									<p>
										At vero eos et rebum
									</p>
								</div>
							</div>
						</div>

						<div class="nf-item photo spacing">
							<div class="item-box">
								<a> <img alt="1" src="{{asset('assets/images/portfolio/21.jpg')}}" class="item-container"> </a>
								<div class="link-zoom">
									<a href="#" class="project_links"> <i class="fa fa-link"> </i> </a>
									<a href="{{asset('assets/images/portfolio/21.jpg')}}" class="fancylight popup-btn" data-fancybox-group="light"> <i class="fa fa-search-plus"></i> </a>
								</div>
								<div class="gallery-heading">
									<h4><a href="#">Financial Services</a></h4>
									<p>
										At vero eos et rebum
									</p>
								</div>
							</div>
						</div>

						<div class="nf-item design spacing">
							<div class="item-box">
								<a> <img alt="1" src="{{asset('assets/images/portfolio/22.jpg')}}" class="item-container"> </a>
								<div class="link-zoom">
									<a href="#" class="project_links"> <i class="fa fa-link"> </i> </a>
									<a href="{{asset('assets/images/portfolio/22.jpg')}}" class="fancylight popup-btn" data-fancybox-group="light"> <i class="fa fa-search-plus"></i> </a>
								</div>
								<div class="gallery-heading">
									<h4><a href="#">Financial Services</a></h4>
									<p>
										At vero eos et rebum
									</p>
								</div>
							</div>
						</div>

						<div class="nf-item coffee spacing">
							<div class="item-box">
								<a> <img alt="1" src="{{asset('assets/images/portfolio/29.jpg')}}" class="item-container"> </a>
								<div class="link-zoom">
									<a href="#" class="project_links"> <i class="fa fa-link"> </i> </a>
									<a href="{{asset('assets/images/portfolio/29.jpg')}}" class="fancylight popup-btn" data-fancybox-group="light"> <i class="fa fa-search-plus"></i> </a>
								</div>
								<div class="gallery-heading">
									<h4><a href="#">Financial Services</a></h4>
									<p>
										At vero eos et rebum
									</p>
								</div>
							</div>
						</div>

						<div class="nf-item design spacing">
							<div class="item-box">
								<a> <img alt="1" src="{{asset('assets/images/portfolio/23.jpg')}}" class="item-container"> </a>
								<div class="link-zoom">
									<a href="#" class="project_links"> <i class="fa fa-link"> </i> </a>
									<a href="{{asset('assets/images/portfolio/23.jpg')}}" class="fancylight popup-btn" data-fancybox-group="light"> <i class="fa fa-search-plus"></i> </a>
								</div>
								<div class="gallery-heading">
									<h4><a href="#">Financial Services</a></h4>
									<p>
										At vero eos et rebum
									</p>
								</div>
							</div>
						</div>

						<div class="nf-item design spacing">
							<div class="item-box">
								<a> <img alt="1" src="{{asset('assets/images/portfolio/24.jpg')}}" class="item-container"> </a>
								<div class="link-zoom">
									<a href="#" class="project_links"> <i class="fa fa-link"> </i> </a>
									<a href="{{asset('assets/images/portfolio/24.jpg')}}" class="fancylight popup-btn" data-fancybox-group="light"> <i class="fa fa-search-plus"></i> </a>
								</div>
								<div class="gallery-heading">
									<h4><a href="#">Financial Services</a></h4>
									<p>
										At vero eos et rebum
									</p>
								</div>
							</div>
						</div>

						<div class="nf-item photo spacing">
							<div class="item-box">
								<a> <img alt="1" src="{{asset('assets/images/portfolio/25.jpg')}}" class="item-container"> </a>
								<div class="link-zoom">
									<a href="#" class="project_links"> <i class="fa fa-link"> </i> </a>
									<a href="{{asset('assets/images/portfolio/25.jpg')}}" class="fancylight popup-btn" data-fancybox-group="light"> <i class="fa fa-search-plus"></i> </a>
								</div>
								<div class="gallery-heading">
									<h4><a href="#">Financial Services</a></h4>
									<p>
										At vero eos et rebum
									</p>
								</div>
							</div>
						</div>

					</div>

				</div>
			</section>
			<!-- End Work Section -->
			<!-- Counter Section -->
			<div class="fact-counter-wrapper padding ptb-xs-60 light-color parallax overlay-dark">
				<div class="container text-center">
					<div class="row">
						<div class="col-sm-3">
							<div class="single-fact">
								<div class="icon-boxed">
									<i class="ion-ios-albums-outline"></i>
								</div>
								<span class="counter" data-count="3562">0</span>
								<p>
									Projects Finished
								</p>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="single-fact">
								<div class="icon-boxed">
									<i class="ion-social-reddit-outline"></i>
								</div>
								<span class="counter" data-count="1054">0</span>
								<p>
									Happy Clients
								</p>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="single-fact">
								<div class="icon-boxed">
									<i class="ion-ios-people-outline"></i>
								</div>
								<span class="counter" data-count="400">0</span>
								<p>
									Team
								</p>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="single-fact">
								<div class="icon-boxed">
									<i class="ion-ios-stopwatch-outline"></i>
								</div>
								<span class="counter" data-count="5685">0</span>
								<p>
									Hours of work
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Counter Section End-->

			<!-- Blog Section -->
			<section id="blog" class="padding ptb-xs-60">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-xs-12 mb-xs-30 mb-sm-60">
							<h2><span>Our</span> News</h2>
							<span class="b-line l-left"></span>
							<div class="row mt-40">
								<div class="col-sm-6 mb-xs-30">
									<div class="single-blog-post">
                            <div class="img-box">
                                <img src="{{asset('assets/images/blog/blog-3.jpg')}}" alt="">
                                <div class="overlay">
                                    <div class="box">
                                        <div class="content">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content-box">
                                <div class="date-box">
                                    <div class="inner">
                                        <div class="date">
                                            <b>24</b> apr
                                        </div>
                                    </div>
                                </div>
                                <div class="content">
                                    <a href="#"><h3>Provide qualtiy productivity with certified engineers</h3></a>
                                    <p>Lorem ipsum dolor sit amet, consectet adipi sed do eiusmod tempor incididunt modo labore et dolore magna aliqu...</p>
                                </div>

                            </div>
                        </div>
								</div>
								<div class="col-sm-6 mb-xs-30">
									<div class="single-blog-post">
                            <div class="img-box">
                                <img src="{{asset('assets/images/blog/blog-1.jpg')}}" alt="">
                                <div class="overlay">
                                    <div class="box">
                                        <div class="content">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content-box">
                                <div class="date-box">
                                    <div class="inner">
                                        <div class="date">
                                            <b>24</b> apr
                                        </div>
                                    </div>
                                </div>
                                <div class="content">
                                    <a href="#"><h3>Provide qualtiy productivity with certified engineers</h3></a>
                                    <p>Lorem ipsum dolor sit amet, consectet adipi sed do eiusmod tempor incididunt modo labore et dolore magna aliqu...</p>
                                </div>

                            </div>
                        </div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-xs-12 mb-xs-30">
							<h2><span>Clients</span> Testimonial</h2>
							<span class="b-line l-left"></span>
							<div class=" text-center mt-40">
								<div class="post-media">
									<div id="testimonial" class=" testimonial nf-carousel-theme">
										<div class="item">
											<div class="quote bg-color light-color">
												<p>
													Maecenas etos sit amet, consectetur adipiscing elit. Terminal volutpat rutrum metro amet sollicitudin interdum. Suspendisse pulvinar, velit etos pharetra interdum, ante tellus gravida mollis tellus neque vitae elit. Mauris adipiscing
												</p>
											</div>
											<div class="testimonial-pic">
												<img class="item-container" src="{{asset('assets/images/testimonial/1.jpg')}}" alt="" />
											</div>
											<div class="testimonial-outher">
												<strong>Mitchell Kappos</strong><span>Co-founder</span>
											</div>
										</div>
										<div class="item">
											<div class="quote bg-color light-color">
												<p>
													Maecenas etos sit amet, consectetur adipiscing elit. Terminal volutpat rutrum metro amet sollicitudin interdum. Suspendisse pulvinar, velit etos pharetra interdum, ante tellus gravida mollis tellus neque vitae elit. Mauris adipiscing
												</p>
											</div>
											<div class="testimonial-pic">
												<img class="item-container" src="{{asset('assets/images/testimonial/2.jpg')}}" alt="" />
											</div>
											<div class="testimonial-outher">
												<strong>Angelina Vinci</strong><span>Marketing</span>
											</div>
										</div>
										<div class="item">
											<div class="quote bg-color light-color">
												<p>
													Maecenas etos sit amet, consectetur adipiscing elit. Terminal volutpat rutrum metro amet sollicitudin interdum. Suspendisse pulvinar, velit etos pharetra interdum, ante tellus gravida mollis tellus neque vitae elit. Mauris adipiscing
												</p>
											</div>
											<div class="testimonial-pic">
												<img class="item-container" src="{{asset('assets/images/testimonial/3.jpg')}}" alt="" />
											</div>
											<div class="testimonial-outher">
												<strong>Leonardo Johnson</strong><span>Sales</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End Blog Section -->
			<!-- FOOTER -->
			<footer class="footer pt-80 pt-xs-60">
				<div class="container">
					<!--Footer Info -->
					<div class="row footer-info mb-60">
						<div class="col-md-3 col-sm-4 col-xs-12 mb-sm-30">
							<h4 class="mb-30">CONTACT Us</h4>
							<address>
								<i class="ion-ios-location fa-icons"></i> 123 Main Street, St. NW Ste, 1 Washington, DC,USA.
							</address>
							<ul class="link-small">
								<li>
									<a href="mailto:business@support.com"><i class="ion-ios-email fa-icons"></i>business@support.com</a>
								</li>
								<li>
									<a><i class="ion-ios-telephone fa-icons"></i>+56 (0) 012 345 6789</a>
								</li>
							</ul>
							<div class="icons-hover-black">
								<a href="javascript:avoid(0);"> <i class="fa fa-facebook"></i> </a><a href="javascript:avoid(0);"> <i class="fa fa-twitter"></i> </a><a href="javascript:avoid(0);"> <i class="fa fa-youtube"></i> </a><a href="javascript:avoid(0);"> <i class="fa fa-dribbble"></i> </a><a href="javascript:avoid(0);"> <i class="fa fa-linkedin"></i> </a>
							</div>
						</div>
						<div class="col-md-2 col-sm-3 col-xs-12 mb-sm-30">
							<h4 class="mb-30">Links</h4>
							<ul class="link blog-link">
								<li>
									<a href="javascript:avoid(0);"><i class="fa fa-angle-double-right"></i> About Us</a>
								</li>
								<li>
									<a href="javascript:avoid(0);"><i class="fa fa-angle-double-right"></i> Services</a>
								</li>
								<li>
									<a href="javascript:avoid(0);"><i class="fa fa-angle-double-right"></i> Privacy policy</a>
								</li>
								<li>
									<a href="javascript:avoid(0);"><i class="fa fa-angle-double-right"></i> Terms &amp; condition</a>
								</li>
							</ul>
						</div>
						<div class="col-md-3 col-sm-5 col-xs-12 mb-sm-30">
							<h4 class="mb-30">Latest Blog</h4>
							<div class="widget-details link">
								<div class="post-type-post media">
									<div class="entry-thumbnail media-left">
										<img src="{{asset('assets/images/blog/small-img.jpg')}}" alt="Image">
									</div>
									<!-- /.entry-thumbnail -->
									<div class="post-content media-body">
										<p class="entry-title">
											<a href="javascript:avoid(0);">Ut enim ad minim veniam, quis nostrud exercitation</a>
										</p>
										<div class="post-meta">
											On
											<time datetime="2017-02-10">
												10 Feb, 2017
											</time>
										</div>
										<!-- /.post-meta -->
									</div>
									<!-- /.post-content -->
								</div>
								<div class="post-type-post media">
									<div class="entry-thumbnail media-left">
										<img src="{{asset('assets/images/blog/small-img1.jpg')}}" alt="Image">
									</div>
									<!-- /.entry-thumbnail -->
									<div class="post-content media-body">
										<p class="entry-title">
											<a href="javascript:avoid(0);">Ut enim ad minim veniam, quis nostrud exercitation</a>
										</p>
										<div class="post-meta">
											On
											<time datetime="2017-02-10">
												10 Feb, 2017
											</time>
										</div>
										<!-- /.post-meta -->
									</div>
									<!-- /.post-content -->
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-12 col-xs-12 mt-sm-30 mt-xs-30">
							<div class="newsletter">
								<h4 class="mb-30">NEWSLETTER SIGNUP</h4>
								<p>
									Subscribe to Our Newsletter to get Important News, Amazing Offers & Inside Scoops:
								</p>
								<form>
									<input type="email" class="newsletter-input input-md newsletter-input mb-0" placeholder="Enter Your Email">
									<button class="newsletter-btn btn btn-xs btn-color" type="submit" value="">
										<i class="ion-ios-paperplane mr-0"></i>
									</button>
								</form>
							</div>
						</div>
					</div>
					<!-- End Footer Info -->
				</div>
				<!-- Copyright Bar -->
				<div class="copyright">
					<div class="container">
						<p>
							Copyright &copy; 2017.Company name All rights reserved.
						</p>
					</div>
				</div>
				<!-- End Copyright Bar -->
			</footer>
			<!-- END FOOTER -->
		</div>
		<!-- Site Wraper End -->

		<script src="{{asset('assets/js/jquery-1.12.4.min.js')}}" type="text/javascript"></script>
		<!-- masonry,isotope Effect Js -->
		<script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('assets/js/isotope.pkgd.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('assets/js/masonry.pkgd.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('assets/js/jquery.appear.js')}}" type="text/javascript"></script>
		<!-- bootstrap Js -->
		<script src="{{asset('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
		<!-- carousel Js -->
		<script src="{{asset('assets/js/plugin/owl.carousel.js')}}" type="text/javascript"></script>
		<!-- fancybox Js -->
		<script src="{{asset('assets/js/jquery.mousewheel-3.0.6.pack.js')}}" type="text/javascript"></script>
		<script src="{{asset('assets/js/jquery.fancybox.pack.js')}}" type="text/javascript"></script>
		<!-- carousel Js -->
		<script src="{{asset('assets/js/jquery.parallax-1.1.3.js')}}" type="text/javascript"></script>
		<!-- Navigation Js -->
		<script src="{{asset('assets/js/navigation.js')}}" type="text/javascript"></script>
		<!-- revolution Js -->
		<script type="text/javascript" src="{{asset('assets/rs-slider/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/rs-slider/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/js/revolution-custom.js')}}"></script>
		<!-- custom Js -->
		<script src="{{asset('assets/js/custom.js')}}" type="text/javascript"></script>
	</body>
</html>

