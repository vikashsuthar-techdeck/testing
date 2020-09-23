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
									<li class="active"><a href="index.php">HOME</a></li>
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
									<li><a href="conference-room.php">conference room</a></li>
								</ul>
								<ul class="nav navbar-nav navbar-right">
									<li><a href="wedding-hall.php">wedding hall</a></li>
									<li><a href="restaurant.php">restaurant</a></li>
									<li class="dropdown">
										<a href="blog.php" class="dropdown-toggle disable" data-hover="dropdown">Blog</a>
										<ul class="dropdown-menu">
											<li><a href="blog-single.php">Blog single</a></li>
										</ul>
									</li>
									<li>
                                        <a href="contact.php">contact</a>
                                    </li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</header>
		<!-- banner -->
		<div class="banner"><img src="images/banner1.jpg" alt="banner"></div>
		<!-- Navigation -->
		<div class="navigation-bar">
			<div class="container">
				<div class="row">
					<div class="col-xs-7">
						<ol class="breadcrumb">
							<li><a href="index.php">Home</a></li>
							<li class="active">Room Detail</li>
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
			<!-- Room details -->
			<section class="room-details container gen-padding">
				<div class="row">
					<aside class="col-md-3 col-sm-12 sidebar">
						<!-- widget -->
						<section class="widget">
							<h1>confirmation</h1>
							<div class="holder reservation-bar">
                                <ul class="itemsList">
                                    <li>Arrive date: 7-June-2016</li>
                                    <li>Departure: 10-June-2016</li>
                                    <li>Adult: 2</li>
                                    <li>Children: 2</li>
                                    <li>Room(s): 2</li>
                                </ul>
								<strong class="total-price">total: <span>$1410</span></strong>
							</div>
						</section>
					</aside>
					<!-- content -->
					<div class="col-md-9 col-sm-12 content">
						<article class="row article-box">
							<a href="checkout.php#" class="close">x</a>
							<div class="col-sm-6">
								<div class="image-frame">
									<img src="images/image-26.jpg" alt="image description">
								</div>
							</div>	
							<div class="col-sm-6 info-frame">
								<h1>deluxe room</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
								<ul class="detail-list list-unstyled">
									<li><strong>Bed:</strong> 1 double bed</li>
									<li><strong>Max:</strong> 2 people</li>
									<li><strong>Availability:</strong> available</li>
									<li><strong>Room size:</strong> 32mp</li>
								</ul>
								<div class="btn-holder text-center">
									<strong class="rent-price">$235 <span>per night</span></strong>
								</div>
							</div>
						</article>
						<article class="row article-box">
							<a href="checkout.php#" class="close">x</a>
							<div class="col-sm-6">
								<div class="image-frame">
									<img src="images/image-26.jpg" alt="image description">
								</div>
							</div>	
							<div class="col-sm-6 info-frame">
								<h1>deluxe room</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
								<ul class="detail-list list-unstyled">
									<li><strong>Bed:</strong> 1 double bed</li>
									<li><strong>Max:</strong> 2 people</li>
									<li><strong>Availability:</strong> available</li>
									<li><strong>Room size:</strong> 32mp</li>
								</ul>
								<div class="btn-holder text-center">
									<strong class="rent-price">$235 <span>per night</span></strong>
								</div>
							</div>
						</article>
						<div class="row">
							<div class="col-xs-12 button">
								<a href="checkout.php#" class="btn btn-default">next step</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- gallery-block -->
			<section class="gallery-block container b-padding">
				<div class="row">
					<header class="col-xs-12">
						<h1>gallery</h1>
					</header>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<!-- carousel -->
						<div id="carousel-example-generic" class="carousel image-gallery slide" data-ride="carousel"> 
							<!-- Wrapper for slides -->
							<div class="carousel-inner">
								<div class="item active">
									<div class="row">
										<div class="col-xs-4">
											<img src="images/img-10.jpg" alt="image description">
										</div>
										<div class="col-xs-4">
											<img src="images/img-11.jpg" alt="image description">
										</div>
										<div class="col-xs-4">
											<img src="images/img-12.jpg" alt="image description">
										</div>
									</div>
								</div>
								<div class="item">
									<div class="row">
										<div class="col-xs-4">
											<img src="images/img-10.jpg" alt="image description">
										</div>
										<div class="col-xs-4">
											<img src="images/img-11.jpg" alt="image description">
										</div>
										<div class="col-xs-4">
											<img src="images/img-12.jpg" alt="image description">
										</div>
									</div>
								</div>
							</div>
							<!-- Controls -->
							<a class="left carousel-control" href="checkout.php#carousel-example-generic" role="button" data-slide="prev"></a>
							<a class="right carousel-control" href="checkout.php#carousel-example-generic" role="button" data-slide="next"></a>
						</div>
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
							<a href="checkout.php#wrapper" class="go-top">
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
							<p>&copy; <a href="checkout.php#" class="link">RangeRelaxe</a>. All rights reserved. Design by <a href="checkout.php#">GalliaSoft</a></p>
						</div>
						<div class="col-sm-6">
							<ul class="list-inline social-networks">
								<li><a href="checkout.php#"><span class="icon-facebook"></span></a></li>
								<li><a href="checkout.php#"><span class="icon-twitter"></span></a></li>
								<li><a href="checkout.php#"><span class="icon-youtube"></span></a></li>
								<li><a href="checkout.php#"><span class="icon-instagram"></span></a></li>
								<li><a href="checkout.php#"><span class="icon-google"></span></a></li>
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