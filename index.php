<?php 
  	include('config/connection.php');
  	
  	include('config/insertq.php');


?>  	
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include('config/upper.php')?>
</head>
<body>
	<!-- main container of all the page elements -->
	<div id="wrapper">
		<!-- header -->
		<?php include('config/header.php')?>
		<!-- carousel -->
		<div id="carousel-example-generic1" class="carousel slide" data-ride="carousel"> 
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active">
					<div class="description">
						<div class="container">
							<div class="row">
								<div class="col-xs-12">
									<h1><em><?php $val=data(1,'home'); echo $val['1']; ?></em><br class="hidden-xs"><span><?php $val=data(4,'home'); echo $val['1']; ?></span></h1>
								</div>
							</div>
						</div>
					</div>
				 <img src="<?php echo $val['2'];?>" alt="image description">
				</div>
				<div class="item">
					<div class="description">
						<div class="container">
							<div class="row">
								<div class="col-xs-12">
									<h1><em><?php $val=data(2,'home'); echo $val['1']; ?></em><br class="hidden-xs"> <span><?php $val=data(5,'home'); echo $val['1']; ?></span></h1>
								</div>
							</div>
						</div>
					</div>
					<img src="<?php echo $val['2'];?>" alt="image description">
				</div>
				<div class="item">
					<div class="description">
						<div class="container">
							<div class="row">
								<div class="col-xs-12">
									<h1><em><?php $val=data(3,'home'); echo $val['1']; ?></em><br class="hidden-xs"> <span><?php $val=data(6,'home'); echo $val['1']; ?></span></h1>
								</div>
							</div>
						</div>
					</div>
					<img src="<?php echo $val['2'];?>" alt="image description">
				</div>
			</div>
			<!-- Controls -->
			<a class="left carousel-control" href="index.php#carousel-example-generic1" role="button" data-slide="prev"></a>
			<a class="right carousel-control" href="index.php#carousel-example-generic1" role="button" data-slide="next"></a>
		</div>
		<!-- reservation-bar -->
		<div class="reservation-bar">
			<div class="container">
				<div class="row">
					<form action="#">
						<div class="col-md-6 col-sm-12">
							<div class="row">
								<div class="col-sm-6">
									<div class="input-append date" id="dpd1" data-date="Check In" data-date-format="dd-mm-yyyy">
										<input class="form-control" size="16" type="text" value="Arrive date">
										<span class="icon-calendar"></span>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="input-append date" id="dpd2" data-date="Check Out" data-date-format="dd-mm-yyyy">
										<input class="form-control" size="16" type="text" value="Departure date">
										<span class="icon-calendar"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-12">
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<div class="fake-select">
											<select>
												<option value="Adult" selected>Adult</option>
												<option>Children</option>
												<option>Option3</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<div class="fake-select">
											<select>
												<option value="Room" selected>Room</option>
												<option>Option2</option>
												<option>Option3</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<input type="submit" class="btn btn-default" value="check availability" style="background-color: #ff6600">
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- contain main informative part of the site -->
		<main id="main">
			<!-- about -->
			<section class="about container b-padding">
				<div class="row">
					<header class="header col-xs-12 g-padding">
						<h1>A few words</h1>
					</header>
				</div>
				<div class="row">
					<div class="col-sm-4 animate" data-anim-type="fadeInUp" data-anim-delay="300">
						<div class="box">
							<div class="icon ico-luxury"></div>
							<h2><?php $val=data(7,'home'); echo $val['1']; ?></h2>
							<p><?php echo $val['2']; ?></p>
						</div>
					</div>
					<div class="col-sm-4 animate" data-anim-type="fadeInUp" data-anim-delay="600">
						<div class="box">
							<div class="icon ico-services"></div>
							<h2><?php $val=data(8,'home'); echo $val['1']; ?></h2>
							<p><?php echo $val['2']; ?></p>
						</div>
					</div>
					<div class="col-sm-4 animate" data-anim-type="fadeInUp" data-anim-delay="900">
						<div class="box">
							<div class="icon ico-reservation"></div>
							<h2><?php $val=data(9,'home'); echo $val['1']; ?></h2>
							<p><?php echo $val['2']; ?></p>
						</div>
					</div>
				</div>
			</section>
			<!-- Our room -->
			<!-- <section class="our-room">
				<div class="image-frame" style="background-image: url('images/image-03.jpg');"></div>
				<div class="container">
					<div class="row">
						<div class="col-sm-6 text-block pull-right animate" data-anim-type="fadeInRight" data-anim-delay="300">
							<h1>Our room - deluxe double</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
							<div class="row">
								<ul class="list-unstyled list col-sm-6">
									<li>LCD TVs 28 ''</li>
									<li>national and international TV channels</li>
									<li>direct dial telephone, Internet access</li>
									<li>premium cosmetics</li>
								</ul>
								<ul class="list-unstyled list col-sm-6">
									<li>fluffy cotton bathrobes</li>
									<li>towels and cotton sheets</li>
									<li>comfortable slippers</li>
									<li>hairdryer</li>
								</ul>
							</div>
							<ul class="list-inline services-list">
								<li><span class="icon ico-downtown"></span>Near<br> downtown</li>
								<li><span class="icon ico-wifi"></span>free wifi</li>
								<li><span class="icon ico-parking"></span>free<br> parking</li>
								<li><span class="icon ico-breakfast"></span>Free<br> breackfast</li>
								<li><span class="icon ico-mp"></span>23mp</li>
							</ul>
							<a href="index.php#" class="btn btn-default">Book Now</a>
						</div>
					</div>
				</div>
			</section> -->
			<!-- restaurant -->
			<!-- <section class="restaurant" style="background-image: url('images/pattern.jpg');">
				<div class="container add-padding">
					<div class="row">
						<div class="col-sm-6 animate" data-anim-type="fadeInUp" data-anim-delay="300">
							<div class="text-box">
								<h1>our restaurant</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
								<a href="index.php#" class="btn btn-default">Book Now</a>
							</div>
						</div>
						<div class="col-sm-6 animate" data-anim-type="fadeInUp" data-anim-delay="600">
							<div class="image-frame"><img src="images/image-02.jpg" alt="image description"></div>
						</div>
					</div>
				</div>
			</section> -->
			<!-- Fun facts -->
			<section class="fun-facts">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="counter-list horizon" data-animate-in="scale:1.2;">
								<div class="grid-item">
									<div class="counter-wrapper">
										<strong class="number counter">
											<span id="s1" class="stats" data-count-from="100" data-count-to="<?php $val=data(10,'home'); echo $val['2']; ?>"></span>
										</strong>
										<span class="title"><?php $val=data(10,'home'); echo $val['1']; ?></span>
									</div>
								</div>
								<div class="grid-item">
									<div class="counter-wrapper">
										<strong class="number counter">
											<span id="s2" class="stats" data-count-from="100" data-count-to="<?php $val=data(11,'home'); echo $val['2']; ?>"></span>
										</strong>
										<span class="title"><?php $val=data(11,'home'); echo $val['1']; ?></span>
									</div>
								</div>
								<div class="grid-item">
									<div class="counter-wrapper">
										<strong class="number counter">
											<span id="s3" class="stats" data-count-from="100" data-count-to="<?php $val=data(12,'home'); echo $val['2']; ?>"></span>
										</strong>
										<span class="title"><?php $val=data(12,'home'); echo $val['1']; ?></span>
									</div>
								</div>
								<div class="grid-item">
									<div class="counter-wrapper">
										<strong class="number counter">
											<span id="s4" class="stats" data-count-from="100" data-count-to="<?php $val=data(13,'home'); echo $val['2']; ?>" ></span>
										</strong>
										<span class="title"><?php $val=data(13,'home'); echo $val['1']; ?></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- our news -->
			<section class="news container b-padding">
				<!-- <div class="row">
					<header class="header col-xs-12 g-padding">
						<h1>our news</h1>
					</header>
				</div> -->
				<div class="row">
					<div class="col-xs-12">
						<!-- carousel -->
						<div id="carousel-example-generic2" class="carousel slide news" data-ride="carousel">	<!-- Wrapper for slides -->
							<!-- <div class="carousel-inner">
								<div class="item active">
									<div class="col-sm-8 col">
										<div class="image-holder">
                                          <a href="images/img13.jpg" class="fancybox">
											<img src="images/image-01.jpg" alt="image description">
                                          </a>
										</div>
									</div>
									<div class="col-sm-4 col">
										<div class="carousel-caption">
											<h2>Presidential suite</h2>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
											<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
											<a href="index.php#" class="btn btn-default">read more</a>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="col-sm-8 col">
										<div class="image-holder"><a href="images/img13.jpg" class="fancybox">
											<img src="images/image-01.jpg" alt="image description">
                                          </a>
										</div>
									</div>
									<div class="col-sm-4 col">
										<div class="carousel-caption">
											<h2>Sit - Relax- Enjoy</h2>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
											<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
											<a href="index.php#" class="btn btn-default">read more</a>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="col-sm-8 col">
										<div class="image-holder">
                                          <a href="images/img13.jpg" class="fancybox">
											<img src="images/image-01.jpg" alt="image description">
                                          </a>
										</div>
									</div>
									<div class="col-sm-4 col">
										<div class="carousel-caption">
											<h2>Presidential suite</h2>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
											<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
											<a href="index.php#" class="btn btn-default">read more</a>
										</div>
									</div>
								</div> -->
							</div>
							<!-- Indicators -->
							<!-- <div class="indicators col-sm-4">
								<ol class="carousel-indicators">
									<li data-target="#carousel-example-generic2" data-slide-to="0" class="active"></li>
									<li data-target="#carousel-example-generic2" data-slide-to="1"></li>
									<li data-target="#carousel-example-generic2" data-slide-to="2"></li>
								</ol>
							</div> -->
						</div>
					</div>
				</div>
			</section>
		</main>
		<!-- footer of the page -->
		<?php include('config/footer.php')?>
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