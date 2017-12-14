@extends('layout.common')


@section('title' , '联系我们')



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

			<!-- HEADER -->
			@include('weilan.header')
			<!-- END HEADER -->

			<!-- CONTENT -->
			<!-- Intro Section -->
			<section class="inner-intro  padding bg-img1 overlay-dark light-color">
				<div class="container">
					<div class="row title">
						<h1>联系我们</h1>
						<div class="page-breadcrumb">
							<a>首页</a>/<span>联系我们</span>
						</div>
					</div>
				</div>
			</section>
			<!-- End Intro Section -->
			<!-- Contact Section -->
			<section class="padding ptb-xs-60">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center">
							<div class="headeing pb-20">
								<h2>保持联系</h2>
								<span class="b-line"></span>
							</div>

							<p class="lead">
								您可以通过以下方式联系我们.
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 contact pb-60 pt-30">
							<div class="row text-center">
								<div class="col-sm-4 pb-xs-30">
									<i class="ion-android-call icon-circle pos-s"></i><a href="#" class="mt-15 i-block">(+86) 18217108467</a>
								</div>
								<div class="col-sm-4 pb-xs-30">
									<i class="ion-ios-location icon-circle pos-s"></i>
									<p  class="mt-15">
										青浦,
										<br />
										青浦区.上海市.中国
									</p>
								</div>
								<div class="col-sm-4 pb-xs-30">
									<i class="ion-ios-email icon-circle pos-s"></i><a href="mailto:18217108467@163.com"  class="mt-15 i-block">18217108467@163.com</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Map Section -->
				<div class="map">
					<div id="map"></div>
				</div>
				<!-- Map Section -->
				<div class="container contact-form text-center pt-80 pt-xs-60 mt-up">
					<div class="row">
						<div class="col-sm-12">
							<div class="headeing pb-20">
								<h2>取得联系</h2>
								<span class="b-line"></span>
							</div>
                                <p class="lead">
                                    我们会及时与您联络.
                                </p>
							<!-- Contact FORM -->
							
                            @include('weilan._form')

							<!-- END Contact FORM -->
						</div>
					</div>
				</div>
			</section>
			<!-- Contact Section -->
			<!--End Contact-->

            @include('weilan.footer')

@endsection