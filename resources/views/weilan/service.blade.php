@extends('layout.common')


@section('title' , '我们的服务')


@section('content')
	<body class="full-intro inner-header">
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

			<!-- END HEADER -->
			<!-- CONTENT -->
			<!-- Intro Section -->
			<section class="inner-intro  padding bg-img1 overlay-dark light-color">
				<div class="container">
					<div class="row title">
						<h1>服务</h1>
						<div class="page-breadcrumb">
							<a>首页</a>/<span>服务</span>
						</div>
					</div>
				</div>
			</section>
			<!-- End Intro Section -->
			<!-- Service Section -->
			<div id="services-section" class="pt-90 pb-20 pt-xs-60">
				<div class="container">
					<div class="row ">
						<div class="col-sm-12">
							<div class="heading-box pb-30">
								<h2><span>我们的</span> 服务</h2>
								<span class="b-line l-left"></span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<ul class="project-col-3 isotope" id="isotope">
								<li>
									<div class="about-block img-scale mb-60 mb-xs-40 clearfix">
										<figure>
											<a href="#"><img class="img-responsive" src="{{asset('assets/images/services/heavy-b-850x500.jpg')}}" alt="Photo"></a>
										</figure>
										<div class="text-box mt-25">
											<div class="box-title mb-15">
												<h3>Financial Planing</h3>
											</div>
											<div class="text-content">
												<p>
													Lorem ipsum dolor sit amet, consectetur adipiscing nulla quis fermentum hendrerit, nisi diam viverra feugiat viverra diam.felis tortor
												</p>
												<a href="#" class="btn-text mt-15">更多</a>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="about-block img-scale mb-60 mb-xs-40 clearfix">
										<figure>
											<a href="#"><img class="img-responsive" src="{{asset('assets/images/services/6-1.jpg')}}" alt="Photo"></a>
										</figure>
										<div class="text-box mt-25">
											<div class="box-title mb-15">
												<h3>Saving & Investing</h3>
											</div>
											<div class="text-content">
												<p>
													Lorem ipsum dolor sit amet, consectetur adipiscing nulla quis fermentum hendrerit, nisi diam viverra feugiat viverra diam.felis tortor
												</p>
												<a href="#" class="btn-text mt-15">更多</a>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="about-block img-scale mb-60 mb-xs-40 clearfix">
										<figure>
											<a href="#"><img class="img-responsive" src="{{asset('assets/images/services/service-1.jpg')}}" alt="Photo"></a>
										</figure>
										<div class="text-box mt-25">
											<div class="box-title mb-15">
												<h3>Taxes Planing</h3>
											</div>
											<div class="text-content">
												<p>
													Lorem ipsum dolor sit amet, consectetur adipiscing nulla quis fermentum hendrerit, nisi diam viverra feugiat viverra diam.felis tortor
												</p>
												<a href="#" class="btn-text mt-15">更多</a>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="about-block img-scale mb-60 mb-xs-40 clearfix">
										<figure>
											<a href="#"><img class="img-responsive" src="{{asset('assets/images/services/service-3.jpg')}}" alt="Photo"></a>
										</figure>
										<div class="text-box mt-25">
											<div class="box-title mb-15">
												<h3>Business Loan</h3>
											</div>
											<div class="text-content">
												<p>
													Lorem ipsum dolor sit amet, consectetur adipiscing nulla quis fermentum hendrerit, nisi diam viverra feugiat viverra diam.felis tortor
												</p>
												<a href="#" class="btn-text mt-15">更多</a>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="about-block img-scale mb-60 mb-xs-40 clearfix">
										<figure>
											<a href="#"><img class="img-responsive" src="{{asset('assets/images/services/1-1.jpg')}}" alt="Photo"></a>
										</figure>
										<div class="text-box mt-25">
											<div class="box-title mb-15">
												<h3>Insurance Consulting</h3>
											</div>
											<div class="text-content">
												<p>
													Lorem ipsum dolor sit amet, consectetur adipiscing nulla quis fermentum hendrerit, nisi diam viverra feugiat viverra diam.felis tortor
												</p>
												<a href="#" class="btn-text mt-15">更多</a>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="about-block img-scale mb-60 mb-xs-40 clearfix">
										<figure>
											<a href="#"><img class="img-responsive" src="{{asset('assets/images/services/5-1.jpg')}}" alt="Photo"></a>
										</figure>
										<div class="text-box mt-25">
											<div class="box-title mb-15">
												<h3>Taxes Planing</h3>
											</div>
											<div class="text-content">
												<p>
													Lorem ipsum dolor sit amet, consectetur adipiscing nulla quis fermentum hendrerit, nisi diam viverra feugiat viverra diam.felis tortor
												</p>
												<a href="#" class="btn-text mt-15">更多</a>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- Service Section end -->
			<!-- section -->
			<div id="serve-section">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="heading-box pb-30">
								<h2><span>优质</span> 服务</h2>
								<span class="b-line l-left"></span>
							</div>

						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 col-md-6 pr-0 plr-xs-15">
							<div class="about-block img-scale black-bg light-color hover-bg clearfix">
								<div class="fl half-width">
									<figure>
										<img class="img-responsive" src="{{asset('assets/images/project/project5.jpg')}}" alt="Photo">
									</figure>
								</div>
								<div class="text-box padding-20 pt-50 half-width fl">
									<div class="box-title">
										<h3 class="mt-0">Aenean suscipit</h3>
									</div>
									<div class="text-content">
										<p>
											Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt.
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 pl-0 plr-xs-15">
							<div class="about-block img-scale black-bg light-color hover-bg clearfix">
								<div class="fl float-right-sm half-width">
									<figure>
										<img class="img-responsive" src="{{asset('assets/images/project/project2.jpg')}}" alt="Photo">
									</figure>
								</div>
								<div class="text-box padding-20 pt-50 half-width fl">
									<div class="box-title">
										<h3 class="mt-0">Aenean suscipit</h3>
									</div>
									<div class="text-content">
										<p>
											Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt.
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 pr-0 plr-xs-15">
							<div class="about-block img-scale black-bg light-color hover-bg clearfix">
								<div class="fr float-left-sm half-width">
									<figure>
										<img class="img-responsive" src="{{asset('assets/images/project/project6.jpg')}}" alt="Photo">
									</figure>
								</div>
								<div class="text-box padding-20 pt-50 text-right text-xs-left half-width fl ">
									<div class="box-title">
										<h3 class="mt-0">Aenean suscipit</h3>
									</div>
									<div class="text-content">
										<p>
											Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt.
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 pl-0 plr-xs-15">
							<div class="about-block img-scale black-bg light-color hover-bg clearfix">
								<div class="fr half-width">
									<figure>
										<img class="img-responsive" src="{{asset('assets/images/project/project4.jpg')}}" alt="Photo">
									</figure>
								</div>
								<div class="text-box padding-20 pt-50 text-right text-xs-left half-width fl">
									<div class="box-title">
										<h3 class="mt-0">Aenean suscipit</h3>
									</div>
									<div class="text-content">
										<p>
											Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
            @include('weilan.partner')

            @include('weilan.footer')

@endsection
