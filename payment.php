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
									<li><a href="conference-room.php">conference room</a></li>
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
		<div class="banner"><img src="images/banner1.jpg" alt="banner"></div>
		<!-- Navigation -->
		<div class="navigation-bar">
			<div class="container">
				<div class="row">
					<div class="col-xs-7">
						<ol class="breadcrumb">
							<li><a href="index.php">Home</a></li>
							<li class="active">Payment</li>
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
			<div class="container">
				<div class="contact g-padding">
					<form action="#" class="billing-form">
						<div class="section">
							<div class="row">
								<div class="col-xs-12">
									<h1>Personal information</h1>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label for="f-name">*First Name</label>
										<input id="f-name" type="text" class="form-control">
									</div>
									<div class="form-group">
										<label for="l-name">*Last Name</label>
										<input id="l-name" type="text" class="form-control">
									</div>
									<div class="form-group">
										<label for="city">*City</label>
										<input id="city" type="text" class="form-control">
									</div>
									<div class="form-group">
										<label for="country">*Country</label>
										<input id="country" type="text" class="form-control">
									</div>
									<div class="form-group">
										<label for="check-1">
											<input id="check-1" type="checkbox">
											<span class="fake-input"></span>
											<span class="fake-label">create account?</span>
										</label>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label for="email">*Email</label>
										<input id="email" type="email" class="form-control">
									</div>
									<div class="form-group">
										<label for="address">*Address</label>
										<input id="address" type="text" class="form-control">
									</div>
									<div class="form-group">
										<label for="code">*Postal Code</label>
										<input id="code" type="text" class="form-control">
									</div>
									<div class="form-group">
										<label for="p-number">*Phone Number</label>
										<input id="p-number" type="tel" class="form-control">
									</div>
								</div>
							</div>
						</div>
						<div class="section">
							<div class="row">
								<div class="col-xs-12">
									<h1>Billing information</h1>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label for="n-card">*Name on card</label>
										<input id="n-card" type="text" class="form-control">
									</div>
									<div class="form-group">
										<label for="c-number">*Credit card number</label>
										<input id="c-number" type="text" class="form-control">
									</div>
									<div class="form-group">
										<label for="card-type">*Card type</label>
										<input id="card-type" type="text" class="form-control">
									</div>
									<div class="row">
										<div class="col-md-4 col-sm-6">
											<div class="form-group">
												<label for="dpd1">*Expiration date</label>
												<div class="input-append date"  data-date="Check In" data-date-format="dd-mm-yyyy">
													<input class="form-control" id="dpd1" size="16" type="text" value="">
												</div>
											</div>
										</div>
										<div class="col-md-4 col-sm-6">
											<label for="dpd2">&nbsp;</label>
											<div class="input-append date"  data-date="Check Out" data-date-format="dd-mm-yyyy">
												<input class="form-control" id="dpd2" size="16" type="text" value="">
											</div>
										</div>
										<div class="col-md-4 col-sm-12">
											<div class="form-group">
												<label for="cvv">*CVV</label>
												<input id="cvv" type="text" class="form-control">
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label for="check-2">
											<input id="check-2" type="checkbox">
											<span class="fake-input"></span>
											<span class="fake-label">Ship to different address?</span>
										</label>
									</div>
									<div class="form-group">
										<label for="check-3">
											<input id="check-3" type="checkbox">
											<span class="fake-input"></span>
											<span class="fake-label">note to expeditor</span>
										</label>
									</div>
									<div class="form-group">
										<textarea cols="30" rows="10" class="form-control"></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<input type="submit" class="btn btn-default" value="place order">
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</main>
		<!-- footer of the page -->
		<div class="b-container">
			<div class="footer-nav">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<a href="payment.php#wrapper" class="go-top">
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
							<p>&copy; <a href="payment.php#" class="link">RangeRelaxe</a>. All rights reserved. Design by <a href="payment.php#">GalliaSoft</a></p>
						</div>
						<div class="col-sm-6">
							<ul class="list-inline social-networks">
								<li><a href="payment.php#"><span class="icon-facebook"></span></a></li>
								<li><a href="payment.php#"><span class="icon-twitter"></span></a></li>
								<li><a href="payment.php#"><span class="icon-youtube"></span></a></li>
								<li><a href="payment.php#"><span class="icon-instagram"></span></a></li>
								<li><a href="payment.php#"><span class="icon-google"></span></a></li>
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