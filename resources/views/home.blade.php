@extends('layouts.app')

<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>ParibahanBD</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
	<!-- Fonts -->
	<link href="fonts/lato/lato.css" rel="stylesheet">
	<!-- CSS -->
	<!-- Bootstrap CSS
	============================================ -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Icon Font CSS
	============================================ -->
	<link rel="stylesheet" href="css/icofont.css">
	<!-- Plugins CSS
	============================================ -->
	<link rel="stylesheet" href="css/plugins.css">
	<!-- ShortCodes CSS
	============================================ -->
	<link rel="stylesheet" href="css/shortcode/shortcodes.css">
	<!-- Style CSS
	============================================ -->
	<link rel="stylesheet" href="style.css">
	<!-- Responsive CSS
	============================================ -->
	<link rel="stylesheet" href="css/responsive.css">
    <!-- Color Style -->
    <link href="css/color/color-1.css" rel="stylesheet">
	<!-- Modernizer JS
	============================================ -->
	<script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
<!-- Pre Loader
============================================ -->
<div class="preloader">
	<div class="loading-center">
		<div class="loading-center-absolute">
			<div class="object object_one"></div>
			<div class="object object_two"></div>
			<div class="object object_three"></div>
		</div>
	</div>
</div>
<!-- Body main wrapper start -->
<div class="wrapper box-layout fix">
<!-- Header 1
============================================ -->
<div class="header-area header-absolute header-transparent">
	<div class="header-top hidden-xs">
		<div class="container">
			<div class="row">
				<!-- Header Top -->
				<div class="header-top-wrapper fix">
					<div class="header-top-left text-left col-sm-6">
						<!-- <p><i class="icofont icofont-envelope"></i><span>info@driveon.com</span></p>
						<p><i class="icofont icofont-ui-call"></i><span>+88 01911123456</span></p> -->
					</div>
					<div class="header-top-right text-right col-sm-6">
						<!-- <p><i class="icofont icofont-clock-time"></i><span>Mon - Sat : 8am - 9pm</span></p> -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="header-bottom sticky">
		<div class="container">
			<div class="row">
				<!-- Header Bottom -->
				<div class="col-xs-12">
					<div class="navbar-header">
						<a href="{{ url('home') }}" class="logo navbar-brand"><img id="logo_img" src="img/logo/color-1.png" alt="logo" /></a>
					</div>
					<div class="main-menu mean-menu float-right">
						<nav>
							<ul>
								<li class="active"><a href="/home">home</a></li>
								
								<li><a href="/complains">Complain<i class="icofont icofont-simple-down"></i></a></li>
								<li><a href="{{ url('registrations') }}">Apply for RC </a></li>
								<li><a href="/qr">qr code</a></li>
								<li><a href="{{ url('contact') }}">contact</a></li>
								<li><a href="/generate-pdf">Online PDF</a></li>
								<li><a href="/logout">Logout</a> </li>

							</ul>
						</nav>
					</div>
					<div class="mobile-menu"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Hero Slide Area
============================================ -->
<div id="hero-area" class="hero-slider-area">
	<div id="hero-slider" class="nivoSlider slider-image">
		<!-- <img src="img/slider/1.jpg" alt="main slider" title="#htmlcaption1"/> -->
		<img src="img/slider/4.jpg" alt="main slider" title="#htmlcaption2"/>
		<!-- <img src="img/slider/3.jpg" alt="main slider" title="#htmlcaption3"/> -->
	</div>
		<div id="htmlcaption2" class="nivo-html-caption">
		<div class="slide-table container">
			<div class="table-cell">
				<div class="hero-slide-content float-left text-left">
					<h3 class="wow fadeInUp" data-wow-duration=".9s" data-wow-delay="0.8s">welcome to paribahanbd</h3>
					<h1 class="wow fadeInUp" data-wow-duration=".9s" data-wow-delay="1.2s">the best <span>way to</span> measures</h1>
					<p class="wow fadeInUp" data-wow-duration=".9s" data-wow-delay="1.6s">The trend solution is here, the paperless solution of driving licence.The Online solution for you.</p>
					<div class="button-group">
						<a href="/registrations" class="btn transparent wow fadeInRight" data-wow-duration=".9s" data-wow-delay="2s">Apply for Virtual RC/DC</a>
						<a href="/renewal" class="btn color wow fadeInRight" data-wow-duration=".9s" data-wow-delay="2.4s">Renew Date</a>
					</div>
				</div>
				<div class="find-course-form float-right text-left wow fadeInUp" data-wow-duration=".9s" data-wow-delay="3s">
					<h5><span>contact with us</span><i class="icofont icofont-police-car"></i></h5>
					<form action="#">
						<div class="course-input"><i class="icofont icofont-user-alt-3"></i> <input type="text" placeholder="Your Name" /></div>
						<div class="course-input"><i class="icofont icofont-envelope"></i> <input type="text" placeholder="Your E-mail" /></div>
						<div class="course-input"><i class="icofont icofont-phone"></i> <input type="text" placeholder="Phone" /></div>
						<div class="course-select"><i class="icofont icofont-clock-time"></i>
							<select class="cusselect">
								<option>Time</option>
								<option>9:00 AM</option>
								<option>12:00 PM</option>
								<option>03:00 PM</option>
								<option>06:00 PM</option>
							</select>
						</div>
						<div class="course-select course-date"><i class="icofont icofont-calendar"></i><input class="date-picker" type="text" placeholder="Date"></div>
					<!-- 	<div class="course-select"><i class="icofont icofont-copy-alt"></i>
							<select class="cusselect">
								<option>Course</option>
								<option>Course 1</option>
								<option>Course 2</option>
								<option>Course 3</option>
								<option>Course 4</option>
							</select>
						</div> -->
						<div class="course-select"><i class="icofont icofont-car-alt-4"></i>
							<select class="cusselect">
								<option>Heavy vehicle</option>
								<option>Light Vehicle</option>
								<option>Motorcycle</option>
								<option>Three Wheeler</option>
								
							</select>
						</div>
						<div class="course-submit"><input type="submit" value="Send us" /></div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Feature Area
============================================ -->
<div id="feature-area" class="feature-area bg-gray pt-90 pb-90">
	<div class="container">
		<!-- Section Title -->
		<div class="row">
			<div class="section-title text-center col-xs-12 mb-45">
				<h3 class="heading">our features</h3>
				<div class="excerpt">
					<p>Online Hackable Solution for daily-life road journey</p>
				</div>
				<i class="icofont icofont-traffic-light"></i>
			</div>
		</div>
		<div class="row">
			<!-- Left Feature -->
			<div class="feature-wrapper feature-left text-right col-md-4 col-xs-12">
				<div class="single-feature">
					<div class="icon"><i class="icofont icofont-file-spreadsheet"></i></div>
					<div class="text fix">
						<h4>Quick License</h4>
						<p>Get licence on by clicking as a pdf or Qr format</p>
					</div>
				</div>
				<div class="single-feature">
					<div class="icon"><i class="icofont icofont-car-alt-4"></i></div>
					<div class="text fix">
						<h4>Help to clear traffic</h4>
						<p>You can complain against if somethng wrong on road.</p>
					</div>
				</div>
				<div class="single-feature">
					<div class="icon"><i class="icofont icofont-video-alt"></i></div>
					<div class="text fix">
						<h4>Get maximum security</h4>
						<p>Your information is more precious for us,so we keep it safe.</p>
					</div>
				</div>
			</div>
			<!-- Feature Image -->
			<div class="feature-image text-center col-md-4 col-xs-12">
				<img src="img/11111.jpg" alt="feature" />
			</div>
			<!-- Right Feature -->
			<div class="feature-wrapper feature-right text-left col-md-4 col-xs-12">
				<div class="single-feature">
					<div class="icon"><i class="icofont icofont-man-in-glasses"></i></div>
					<div class="text fix">
						<h4>Fast Solution</h4>
						<p>Get as early as possible solution by our authority</p>
					</div>
				</div>
				<div class="single-feature">
					<div class="icon"><i class="icofont icofont-clock-time"></i></div>
					<div class="text fix">
						<h4>Any Time Any Place</h4>
						<p>Get every solution on any time</p>
					</div>
				</div>
				<div class="single-feature">
					<div class="icon"><i class="icofont icofont-direction-sign"></i></div>
					<div class="text fix">
						<h4>Get out the box</h4>
						<p>It's high time get more consious about driving licence and relief to got too many penalty payment</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Funfact Area
============================================ -->
<div class="funfact-area overlay overlay-white overlay-80 pt-90 pb-60">
	<div class="container">
		<div class="row">
			<div class="single-facts text-center col-sm-3 col-xs-12 mb-30">
				<i class="icofont icofont-hat-alt"></i>
				<h1 class="counter plus">1500</h1>
				<p>Register people</p>
			</div>
			<div class="single-facts text-center col-sm-3 col-xs-12 mb-30">
				<i class="icofont icofont-user-suited"></i>
				<h1 class="counter">50</h1>
				<p>authority member</p>
			</div>
			<div class="single-facts text-center col-sm-3 col-xs-12 mb-30">
				<i class="icofont icofont-history"></i>
				<h1 class="counter">11</h1>
				<p>Help line</p>
			</div>
			<div class="single-facts text-center col-sm-3 col-xs-12 mb-30">
				<i class="icofont icofont-users-social"></i>
				<h1 class="counter plus">80</h1>
				<p>Solution case</p>
			</div>
		</div>
	</div>
</div>

<!-- JS -->

<!-- jQuery JS
============================================ -->
<script src="js/vendor/jquery-1.12.0.min.js"></script>
<!-- Bootstrap JS
============================================ -->
<script src="js/bootstrap.min.js"></script>
<!-- Plugins JS
============================================ -->
<script src="js/plugins.js"></script>
<!-- Ajax Mail JS
============================================ -->
<script src="js/ajax-mail.js"></script>
<!-- WOW JS
============================================ -->
<script src="js/wow.min.js"></script>
<!-- Main JS
============================================ -->
<script src="js/main.js"></script>

</body>
</html>
