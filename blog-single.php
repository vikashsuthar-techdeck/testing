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
										<a href="rooms.php" class="dropdown-toggle disable" data-toggle="dropdown" data-hover="dropdown">rooms</a>
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
									<li class="active dropdown">
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
							<li class="active">Article detail</li>
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
			<div class="container gen-padding">
				<div class="row">
					<!-- side bar -->
					<aside class="col-md-3 col-sm-4 sidebar">
						<!-- widget -->
						<section class="widget">
							<h1>category</h1>
							<div class="holder">
								<form action="#">
									<ul class="list-unstyled">
										<li>
											<label for="check-1">
												<input id="check-1" type="checkbox">
												<span class="fake-input"></span>
												<span class="fake-label">All</span>
											</label>
										</li>
										<li>
											<label for="check-2">
												<input id="check-2" type="checkbox">
												<span class="fake-input"></span>
												<span class="fake-label">Rooms</span>
											</label>
										</li>
										<li>
											<label for="check-3">
												<input id="check-3" type="checkbox">
												<span class="fake-input"></span>
												<span class="fake-label">Events</span>
											</label>
										</li>
										<li>
											<label for="check-4">
												<input id="check-4" type="checkbox">
												<span class="fake-input"></span>
												<span class="fake-label">Restaurant</span>
											</label>
										</li>
										<li>
											<label for="check-5">
												<input id="check-5" type="checkbox">
												<span class="fake-input"></span>
												<span class="fake-label">Family</span>
											</label>
										</li>
									</ul>
								</form>
							</div>
						</section>
						<!-- widget -->
						<section class="widget">
							<h1>gallery</h1>
							<div class="holder">
								<ul class="list-inline gallery">
									<li>
										<a href="blog-single.php#"><img src="images/thumb-06.jpg" alt="image description"></a>
									</li>
									<li>
										<a href="blog-single.php#"><img src="images/thumb-07.jpg" alt="image description"></a>
									</li>
									<li>
										<a href="blog-single.php#"><img src="images/thumb-08.jpg" alt="image description"></a>
									</li>
									<li>
										<a href="blog-single.php#"><img src="images/thumb-09.jpg" alt="image description"></a>
									</li>
									<li>
										<a href="blog-single.php#"><img src="images/thumb-10.jpg" alt="image description"></a>
									</li>
									<li>
										<a href="blog-single.php#"><img src="images/thumb-11.jpg" alt="image description"></a>
									</li>
								</ul>
							</div>
						</section>
						<!-- widget -->
						<section class="widget">
							<h1>Tags</h1>
							<div class="holder">
								<ul class="list tags list-inline">
									<li><a href="blog-single.php#">Hotel</a></li>
									<li><a href="blog-single.php#">Restaurant</a></li>
									<li><a href="blog-single.php#">Room</a></li>
									<li><a href="blog-single.php#">Wedding</a></li>
									<li><a href="blog-single.php#">Luxury</a></li>
									<li><a href="blog-single.php#">Party</a></li>
								</ul>
							</div>
						</section>
					</aside>
					<!-- content -->
					<div class="col-md-9 col-sm-8 content">
						<div class="post-detail">
							<div class="row">
								<article class="col-xs-12">
									<div class="image-frame">
										<img src="images/image-11.jpg" alt="image description">
									</div>
									<h1>title of the article</h1>
									<ul class="list-inline metas">
										<li><a href="blog-single.php#"><span class="icon-folder-open"></span>Rooms</a></li>
										<li><span class="icon-calendar"></span>17, March</li>
									</ul>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
								</article>
							</div>
							<div class="row">
								<div class="col-md-4 col-sm-12">
									<!-- social networks -->
									<ul class="list-inline social-networks">
										<li><a href="blog-single.php#"><span class="icon-facebook"></span></a></li>
										<li><a href="blog-single.php#"><span class="icon-twitter"></span></a></li>
										<li><a href="blog-single.php#"><span class="icon-youtube"></span></a></li>
										<li><a href="blog-single.php#"><span class="icon-instagram"></span></a></li>
										<li><a href="blog-single.php#"><span class="icon-google"></span></a></li>
									</ul>
								</div>
								<div class="col-md-8 col-sm-12">
									<nav>
										<ul class="pager">
											<li class="previous disabled">
												<a href="blog-single.php#">
													<strong class="link-text">
														<span class="glyphicon glyphicon-triangle-left" aria-hidden="true"></span>previous page
													</strong> 
													<span>Modern, luxury hotel website</span>
												</a>
											</li>
											<li class="next">
												<a href="blog-single.php#">
													<strong class="link-text">
														<span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>next page
													</strong>
													<span>Modern, luxury hotel website</span>
												</a>
											</li>
										</ul>
									</nav>
								</div>
							</div>
						</div>
						<!-- comments -->
						<div class="row comments-block">
							<div class="col-xs-12">
								<div class="row">
									<div class="col-xs-12">
										<h1>Leave a comment</h1>
									</div>
								</div>
								<div class="row">
									<form action="#">
										<div class="col-xs-12 comments-holder">
											<div class="avatar-holder"><img src="images/avatar.png" alt="avatar"></div>
											<div class="form-top">
												<a href="blog-single.php#" class="comm-counter">1</a>
												<h2>Comment</h2>
											</div>
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Comment">
											</div>
											<div class="row">
												<div class="col-sm-6">
													<div class="form-group">
														<input type="email" class="form-control" placeholder="*Email">
													</div>
												</div>
												<div class="col-sm-6">
													<input class="btn btn-default" type="submit" value="Post comment">
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		<!-- footer of the page -->
		<div class="b-container">
			<div class="footer-nav">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<a href="blog-single.php#wrapper" class="go-top">
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
							<p>&copy; <a href="blog-single.php#" class="link">RangeRelaxe</a>. All rights reserved. Design by <a href="blog-single.php#">GalliaSoft</a></p>
						</div>
						<div class="col-sm-6">
							<ul class="list-inline social-networks">
								<li><a href="blog-single.php#"><span class="icon-facebook"></span></a></li>
								<li><a href="blog-single.php#"><span class="icon-twitter"></span></a></li>
								<li><a href="blog-single.php#"><span class="icon-youtube"></span></a></li>
								<li><a href="blog-single.php#"><span class="icon-instagram"></span></a></li>
								<li><a href="blog-single.php#"><span class="icon-google"></span></a></li>
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