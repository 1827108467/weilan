@extends('layout.common')


@section('title' , '首页')


@section('content')
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
			
			<!--  header-->
			@include('weilan.header')

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
									<h2 class="font-s">We make <span class="text-color"> Awesome </span> Things</h2>
								</div>
								<div class="caption sfb bold  text-center "
								data-x="center"
								data-y="200"
								data-speed="900"
								data-start="1500"
								data-easing="Sine.easeOIn">
									<p class="paragraph-s">
										家居服务
										<br>
										享受更美好的生活.
									</p>
								</div>
								<div class="caption sfb lowercase-caption text-center"
								data-x="center"
								data-y="280"
								data-speed="1000"
								data-start="2000"
								data-easing="Sine.easeOut">
									<a class="btn-text" href="#">查看更多</a>
									<a class="btn-text secondary_bg" href="{{ url('/contact') }}">联系我们</a>
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
									<h2 class="font-s">We make <span class="text-color"> Awesome </span> Things</h2>
								</div>
								<div class="caption sfb bold  text-center "
								data-x="center"
								data-y="200"
								data-speed="900"
								data-start="1500"
								data-easing="Sine.easeOIn">
									<p class="paragraph-s">
										家居服务
										<br>
										享受更美好的生活.
									</p>
								</div>
								<div class="caption sfb lowercase-caption text-center"
								data-x="center"
								data-y="280"
								data-speed="1000"
								data-start="2000"
								data-easing="Sine.easeOut">
									<a class="btn-text" href="#">查看更多</a>
									<a class="btn-text secondary_bg" href="{{ url('/contact') }}">联系我们</a>
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
									<h2 class="font-s">We make <span class="text-color"> Awesome </span> Thing</h2>
								</div>
								<div class="caption sfb bold  text-center "
								data-x="center"
								data-y="200"
								data-speed="900"
								data-start="1500"
								data-easing="Sine.easeOIn">
									<p class="paragraph-s">
										家居服务
										<br>
										享受更美好的生活.
									</p>
								</div>
								<div class="caption sfb lowercase-caption text-center"
								data-x="center"
								data-y="280"
								data-speed="1000"
								data-start="2000"
								data-easing="Sine.easeOut">
									<a class="btn-text" href="#">查看更多</a>
									<a class="btn-text secondary_bg" href="{{ url('/contact') }}">联系我们</a>
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
								<a class="categories active" data-filter="*">所有</a>
							</li>
							<li>
								<a class="categories" data-filter=".branding">品牌</a>
							</li>
							<li>
								<a class="categories" data-filter=".design">设计</a>
							</li>
							<li>
								<a class="categories" data-filter=".photo">照片</a>
							</li>
							<li>
								<a class="categories" data-filter=".coffee">咖啡</a>
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
									成功案例
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
									合作客户
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
									团队
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
									工作时长
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
							<h2><span>我们的</span> 动态</h2>
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
						
						@include('weilan.client')

					</div>
				</div>
			</section>

			@include('weilan.footer')

		</div>
@endsection