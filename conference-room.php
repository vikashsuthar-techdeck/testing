<!DOCTYPE html>
<html>
<head>
	<!-- set the encoding of your site -->
	<meta charset="utf-8">
	<!-- set the viewport width and initial-scale on mobile devices -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Hotel</title>
	<!-- include the site stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/colors.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/jquery.countdown.css" type="text/css">
	<link rel="stylesheet" href="css/animations.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/datepicker.css" type="text/css" media="all">
	<!-- Bootstrap Dropdown Hover CSS -->
	<link rel="stylesheet" href="css/animate.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/bootstrap-dropdownhover.min.css" type="text/css" media="all">
	<!-- Fonts CSS -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,400italic,700" type="text/css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" type="text/css">
	<!-- Range slider CSS -->
	<link rel="stylesheet prefetch" href="css/jquery-ui.css" type="text/css">
	<!-- flex slider CSS -->
	<link rel="stylesheet" href="css/flexslider.css" type="text/css">
</head>
<body>
	<!-- main container of all the page elements -->
	<div id="wrapper">
		<!-- header -->
		<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<strong class="logo"><a href="index.php"><img src="images/logo.png" alt="Hotel"></a></strong>
						<!-- main navigation -->
						<nav class="navbar navbar-default"> 
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"><span></span></button>
							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav navbar-left">
									<li><a href="index.php">HOME</a></li>
									<li><a href="aboutus.php">ABOUT US</a></li>
									<li class="dropdown">
										<a href="rooms.php" class="dropdown-toggle disable" data-hover="dropdown">rooms</a>
										<ul class="dropdown-menu">
											<li><a href="room-detail.php">Room details</a></li>
                                            <li><a href="rooms2.php">Rooms 2</a></li>
                                            <li><a href="payment.php">Payment</a></li>
                                            <li><a href="checkout.php">Checkout</a></li>
										</ul>
									</li>
									<li class="active"><a href="conference-room.php">conference room</a></li>
								</ul>
								<ul class="nav navbar-nav navbar-right">
									<li><a href="wedding-hall.php">wedding hall</a></li>
									<li><a href="restaurant.php">restaurant</a></li>
									<li class="dropdown">
										<a href="blog.php" class="dropdown-toggle disable" data-hover="dropdown">blog</a>
										<ul class="dropdown-menu">
											<li><a href="blog-single.php">Blog single</a></li>
										</ul>
									</li>
									<li><a href="contact.php">contact</a></li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</header>
		<!-- banner -->
		<div class="banner"><img src="images/banner2.jpg" alt="banner"></div>
		<!-- Navigation -->
		<div class="navigation-bar">
			<div class="container">
				<div class="row">
					<div class="col-xs-7">
						<ol class="breadcrumb">
							<li><a href="index.php">Home</a></li>
							<li class="active">conference room</li>
						</ol>
					</div>
					<div class="col-xs-5">
						<a href="rooms.php" class="link">book a room</a>
					</div>
				</div>
			</div>
		</div>
		<!-- contain main informative part of the site -->
		<main id="main">
			<!-- about -->
			<section class="about container add-padding">
				<div class="row">
					<div class="col-sm-4 animate" data-anim-type="fadeInUp" data-anim-delay="300">
						<div class="box">
							<div class="icon ico-projector"></div>
							<h2>Projector</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
					<div class="col-sm-4 animate" data-anim-type="fadeInUp" data-anim-delay="600">
						<div class="box">
							<div class="icon ico-people"></div>
							<h2>up to 400 people</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
					<div class="col-sm-4 animate" data-anim-type="fadeInUp" data-anim-delay="900">
						<div class="box">
							<div class="icon ico-breakfast"></div>
							<h2>free breakfast</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
				</div>
			</section>
			<!-- Services block -->
			<section class="services-block">
				<div class="image-frame" style="background-image: url('images/image-12.jpg');"></div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6 col-sm-12 pull-right">
							<div class="row blocks">
								<div class="col-sm-6 col-md-12 col-lg-6 block meeting">
									<h2>create your meeting</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
								</div>
								<div class="col-sm-6 col-md-12 col-lg-6 block hall">
									<h2>modern hall</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
								</div>
								<div class="col-sm-6 col-md-12 col-lg-6 block speakers">
									<h2>great speakers</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
								</div>
								<div class="col-sm-6 col-md-12 col-lg-6 block downtown">
									<h2>Near downtown</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- conference room -->
			<section class="rooms-section container add-padding">
				<div class="row">
					<header class="col-md-10 col-sm-12 col-md-offset-1 col-sm-offset-0 header">
						<h1>conference rooms</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
					</header>
				</div>
				<div class="row">
					<article class="col-sm-4 info-block animate" data-anim-type="fadeInUp" data-anim-delay="300">
						<div class="image-frame">
							<div class="info-frame">
								<a href="images/img13.jpg" class="fancybox magnify"></a>
								<ul class="list-inline social-networks">
									<li><a href="conference-room.php#"><span class="icon-facebook"></span></a></li>
									<li><a href="conference-room.php#"><span class="icon-twitter"></span></a></li>
									<li><a href="conference-room.php#"><span class="icon-youtube"></span></a></li>
									<li><a href="conference-room.php#"><span class="icon-instagram"></span></a></li>
									<li><a href="conference-room.php#"><span class="icon-google"></span></a></li>
								</ul>
							</div>
							<img src="images/image-13.jpg" alt="image description">
						</div>
						<div class="info-bar">
							<div class="holder">
								<div class="col">
									<strong class="title">hall 1</strong>
								</div>
								<div class="col">
									<strong class="price"><span>$475</span> 150 people</strong>
								</div>
							</div>
						</div>
					</article>
					<article class="col-sm-4 info-block animate" data-anim-type="fadeInUp" data-anim-delay="600">
						<div class="image-frame">
							<div class="info-frame">
								<a href="images/img13.jpg" class="fancybox magnify"></a>
								<ul class="list-inline social-networks">
									<li><a href="conference-room.php#"><span class="icon-facebook"></span></a></li>
									<li><a href="conference-room.php#"><span class="icon-twitter"></span></a></li>
									<li><a href="conference-room.php#"><span class="icon-youtube"></span></a></li>
									<li><a href="conference-room.php#"><span class="icon-instagram"></span></a></li>
									<li><a href="conference-room.php#"><span class="icon-google"></span></a></li>
								</ul>
							</div>
							<img src="images/image-14.jpg" alt="image description">
						</div>
						<div class="info-bar">
							<div class="holder">
								<div class="col">
									<strong class="title">hall 2</strong>
								</div>
								<div class="col">
									<strong class="price"><span>$750</span> 250 people</strong>
								</div>
							</div>
						</div>
					</article>
					<article class="col-sm-4 info-block animate" data-anim-type="fadeInUp" data-anim-delay="900">
						<div class="image-frame">
							<div class="info-frame">
								<a href="images/img13.jpg" class="fancybox magnify" ></a>
								<ul class="list-inline social-networks">
									<li><a href="conference-room.php#"><span class="icon-facebook"></span></a></li>
									<li><a href="conference-room.php#"><span class="icon-twitter"></span></a></li>
									<li><a href="conference-room.php#"><span class="icon-youtube"></span></a></li>
									<li><a href="conference-room.php#"><span class="icon-instagram"></span></a></li>
									<li><a href="conference-room.php#"><span class="icon-google"></span></a></li>
								</ul>
							</div>
							<img src="images/image-15.jpg" alt="image description">
						</div>
						<div class="info-bar">
							<div class="holder">
								<div class="col">
									<strong class="title">hall 3</strong>
								</div>
								<div class="col">
									<strong class="price"><span>$1250</span> 400 people</strong>
								</div>
							</div>
						</div>
					</article>
				</div>
			</section>
			<!-- Fun facts -->
			<section class="fun-facts">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="counter-list horizon" data-animate-in="scale:1.2;">
								<div class="grid-item">
									<div class="counter-wrapper">
										<strong class="number counter">
											<span id="s1" class="stats" data-count-from="10" data-count-to="489" >489</span>
										</strong>
										<span class="title">International speakers</span>
									</div>
								</div>
								<div class="grid-item">
									<div class="counter-wrapper">
										<strong class="number counter">
											<span id="s2" class="stats" data-count-from="1" data-count-to="124" >124</span>
										</strong>
										<span class="title">New speakers</span>
									</div>
								</div>
								<div class="grid-item">
									<div class="counter-wrapper">
										<strong class="number counter">
											<span id="s3" class="stats" data-count-from="1" data-count-to="75" >75</span>
										</strong>
										<span class="title">Returns</span>
									</div>
								</div>
								<div class="grid-item">
									<div class="counter-wrapper">
										<strong class="number counter">
											<span id="s4" class="stats" data-count-from="10" data-count-to="512" >512</span>
										</strong>
										<span class="title">Registrated members</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- testimonials -->
			<section class="testimonials container add-padding">
				<div class="row">
					<header class="col-xs-12">
						<h1>What our clients say</h1>
					</header>
				</div>
				<div class="row">
					<!-- carousel -->
					<div id="carousel-example-generic" class="carousel testimonials-carousel slide" data-ride="carousel"> 
						<!-- Wrapper for slides -->
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-xs-6">
									<div class="row">
										<div class="col-sm-8 col">
											<blockquote>
												<cite><span>Janice</span>, Italy</cite>
												<q>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</q>
											</blockquote>
										</div>
										<div class="col-sm-4 col">
											<div class="image-frame">
												<div class="image-holder">
													<img src="images/thumb-12.jpg" alt="image description">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-6">
									<div class="row">
										<div class="col-sm-8 col">
											<blockquote>
												<cite><span>Rachel</span>, Miami</cite>
												<q>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</q>
											</blockquote>
										</div>
										<div class="col-sm-4 col">
											<div class="image-frame">
												<div class="image-holder">
													<img src="images/thumb-13.jpg" alt="image description">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="col-xs-6">
									<div class="row">
										<div class="col-sm-8 col">
											<blockquote>
												<cite><span>Janice</span>, Italy</cite>
												<q>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</q>
											</blockquote>
										</div>
										<div class="col-sm-4 col">
											<div class="image-frame">
												<div class="image-holder">
													<img src="images/thumb-12.jpg" alt="image description">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-6">
									<div class="row">
										<div class="col-sm-8 col">
											<blockquote>
												<cite><span>Rachel</span>, Miami</cite>
												<q>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</q>
											</blockquote>
										</div>
										<div class="col-sm-4 col">
											<div class="image-frame">
												<div class="image-holder">
													<img src="images/thumb-13.jpg" alt="image description">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="col-xs-6">
									<div class="row">
										<div class="col-sm-8 col">
											<blockquote>
												<cite><span>Janice</span>, Italy</cite>
												<q>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</q>
											</blockquote>
										</div>
										<div class="col-sm-4 col">
											<div class="image-frame">
												<div class="image-holder">
													<img src="images/thumb-12.jpg" alt="image description">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-6">
									<div class="row">
										<div class="col-sm-8 col">
											<blockquote>
												<cite><span>Rachel</span>, Miami</cite>
												<q>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</q>
											</blockquote>
										</div>
										<div class="col-sm-4 col">
											<div class="image-frame">
												<div class="image-holder">
													<img src="images/thumb-13.jpg" alt="image description">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- carousel-indicators -->
						<ol class="carousel-indicators">
							<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-example-generic" data-slide-to="1"></li>
							<li data-target="#carousel-example-generic" data-slide-to="2"></li>
						</ol>
					</div>
				</div>
			</section>
		</main>
		<!-- footer of the page -->
		<div class="b-container">
			<div class="footer-nav">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<a href="conference-room.php#wrapper" class="go-top">
								<span class="glyphicon glyphicon-menu-up" aria-hidden="true"></span>
							</a>
							<strong class="logo"><a href="index.php"><img src="images/f-logo.png" alt="Hotel"></a></strong>
							<!-- footer navigation -->
							<nav class="f-nav"> 
								<ul class="nav navbar-nav navbar-left">
									<li><a href="index.php">HOME</a></li>
									<li><a href="aboutus.php">ABOUT US</a></li>
									<li><a href="rooms.php">rooms</a></li>
									<li><a href="conference-room.php">conference room</a></li>
								</ul>
								<ul class="nav navbar-nav navbar-right">
									<li><a href="wedding-hall.php">wedding hall</a></li>
									<li><a href="restaurant.php">restaurant</a></li>
									<li><a href="blog.php">blog</a></li>
									<li><a href="contact.php">contact</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
			<footer id="footer">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<p>&copy; <a href="conference-room.php#" class="link">RangeRelaxe</a>. All rights reserved. Design by <a href="conference-room.php#">GalliaSoft</a></p>
						</div>
						<div class="col-sm-6">
							<ul class="list-inline social-networks">
								<li><a href="conference-room.php#"><span class="icon-facebook"></span></a></li>
								<li><a href="conference-room.php#"><span class="icon-twitter"></span></a></li>
								<li><a href="conference-room.php#"><span class="icon-youtube"></span></a></li>
								<li><a href="conference-room.php#"><span class="icon-instagram"></span></a></li>
								<li><a href="conference-room.php#"><span class="icon-google"></span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>
	<!-- include jQuery library -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script type="text/javascript">window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<!-- Range Slider JavaScript -->
	<script type="text/javascript" src='js/jquery-ui.min.js'></script>
	<script type="text/javascript" src='js/range-slider.js'></script>
	<!-- Same Height JavaScript -->
	<script type="text/javascript" src='js/same-height.js'></script>
	<!-- include custom JavaScript -->
	<script type="text/javascript" src="js/jquery.main.js"></script>
	<script type="text/javascript" src="js/animations.min.js"></script>
	<script type="text/javascript" src="js/jquery.plugin.js"></script>
	<script type="text/javascript" src="js/jquery.countdown.js"></script>
	<script type="text/javascript" src="js/timber.master.min.js"></script>
	<!-- Bootstrap Dropdown Hover JS -->
	<script type="text/javascript" src="js/bootstrap-dropdownhover.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" defer src="js/jquery.flexslider.js"></script> 
	<script type="text/javascript" src="js/myscript.js"></script>
</body>
</html>