<?php 
  	include('config/connection.php');
  	
  	include('config/insertq.php');

  	// $limit= "SELECT SUBSTRING(`text`, 1, 100) FROM room_details"
  	// echo '$limit';
?> 

<!DOCTYPE html>
<html>
<head>
	<?php include('config/upper.php')?>
</head>
<body>
	<!-- main container of all the page elements -->
	<div id="wrapper">
		<!-- header -->
		<?php include('config/header.php')?>
		<!-- banner -->
		<div class="banner"><img src="images/banner1.jpg" alt="banner"></div>
		<!-- Navigation -->
		<div class="navigation-bar">
			<div class="container">
				<div class="row">
					<div class="col-xs-7">
						<ol class="breadcrumb">
							<li><a href="index.php">Home</a></li>
							<li class="active">Rooms</li>
						</ol>
					</div>
					<!-- <div class="col-xs-5">
						<a href="rooms.php" class="link">book a room</a>
					</div> -->
				</div>
			</div>
		</div>
		<!-- contain main informative part of the site -->
		<main id="main">
			<div class="container gen-padding">
				<div class="row">
					<!-- side bar -->
					<!-- <aside class="col-md-3 col-sm-4 sidebar"> -->
						<!-- widget -->
						<!-- <section class="widget">
							<h1>Book a room</h1>
							<div class="holder reservation-bar">
								<div class="input-append date" id="dpd1" data-date="Check In" data-date-format="dd-mm-yyyy">
									<input class="form-control" size="16" type="text" value="Arrive date">
									<span class="icon-calendar"></span>
								</div>
								<div class="input-append date" id="dpd2" data-date="Check Out" data-date-format="dd-mm-yyyy">
									<input class="form-control" size="16" type="text" value="Departure date">
									<span class="icon-calendar"></span>
								</div>
								<div class="form-group">
									<div class="fake-select">
										<select>
											<option selected value="Adult">Adult</option>
											<option>Children</option>
											<option>Option3</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<div class="fake-select">
										<select>
											<option selected value="Room">Room</option>
											<option>Option2</option>
											<option>Option3</option>
										</select>
									</div>
								</div>
								<input type="submit" class="btn btn-default" value="check availability">
							</div>
						</section> -->
						<!-- widget -->
						<!-- <section class="widget">
							<h1>filter by</h1>
							<div class="holder">
								<div class="block">
									<h2>room type</h2>
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
													<span class="fake-label">Single room</span>
												</label>
											</li>
											<li>
												<label for="check-3">
													<input id="check-3" type="checkbox">
													<span class="fake-input"></span>
													<span class="fake-label">Double room</span>
												</label>
											</li>
											<li>
												<label for="check-4">
													<input id="check-4" type="checkbox">
													<span class="fake-input"></span>
													<span class="fake-label">Presidential suite</span>
												</label>
											</li>
											<li>
												<label for="check-5">
													<input id="check-5" type="checkbox">
													<span class="fake-input"></span>
													<span class="fake-label">Family room</span>
												</label>
											</li>
										</ul>
									</form>
								</div>
								<div class="block">
									<h2>Price</h2>
									<div class="range-slider">
										<div id="slider"></div>
									</div>
								</div>
							</div>
						</section> -->
						<!-- widget -->
						<!-- <section class="widget">
							<h1>selected rooms</h1>
							<div class="holder">
								<ul class="list list-unstyled">
									<li><a href="rooms2.php#">Single room</a></li>
									<li><a href="rooms2.php#">Double room</a></li>
									<li><a href="rooms2.php#">Family room</a></li>
								</ul>
							</div>
						</section> -->
					<!-- </aside> -->
					<!-- content -->
					<!-- <div class="col-md-9 col-sm-8 content">
						<div class="row">
							<div class="col-xs-12 sorting-bar">
								<div class="pages-show">
									<strong class="heading">Show:</strong>
									<div class="selection">
										<div class="fake-select">
											<select>
												<option selected value="3">3</option>
												<option>4</option>
												<option>5</option>
											</select>
										</div>
									</div>
								</div>
								<ul class="list-inline view-type">
									<li><a href="rooms2.php#"><span class="icon-view_module"></span></a></li>
									<li class="active"><a href="rooms2.php#"><span class="icon-view_list"></span></a></li>
								</ul>
							</div>
						</div> -->
						<div class="row rooms list-view">
							<article class="article">
								<div class="col-md-8 col-sm-12 col">
									<div class="image-frame"><a href="room-detail.php"> <img src="<?php  $val=data(1,'rooms'); echo $val['6']; ?>" alt="image description"></a></div>
								</div>	
								<div class="col-md-4 col-sm-12 col">
									<div class="block">
										<div class="info-frame">
											<h1><a href="room-detail.php" style="text-decoration: none; color: #c2a476;"> Deluxe </a></h1>
											<p><?php echo $val['1']; ?></p>
											<dl class="detail-list">
												<dt>Bed:</dt>
												<dd><?php echo $val['2']; ?></dd>
												<dt>Max:</dt>
												<dd><?php echo $val['3']; ?></dd>
												<dt>Room size:</dt>
												<dd><?php echo $val['4']; ?></dd>
											</dl>
											<div class="btn-holder">
												<a href="rooms2.php#" class="btn btn-default">Book Room</a>
												<strong class="rent-price">$ <?php echo $val['5']; ?> <span>per night</span></strong>
											</div>
										</div>
									</div>
								</div>
							</article>
							<article class="article">
								<div class="col-md-8 col-sm-12 col">
									<div class="image-frame"><a href="sweets.php"> <img src="<?php  $val=data(2,'rooms'); echo $val['6']; ?>" alt="image description"></a></div>
								</div>	
								<div class="col-md-4 col-sm-12 col">
									<div class="block">
										<div class="info-frame">
											<h1><a href="sweetes.php" style="text-decoration: none; color: #c2a476;" >Sweets</a></h1>
											<p><?php echo $val['1']; ?></p>
											<dl class="detail-list">
												<dt>Bed:</dt>
												<dd><?php echo $val['2']; ?></dd>
												<dt>Max:</dt>
												<dd><?php echo $val['3']; ?></dd>
												<dt>Room size:</dt>
												<dd><?php echo $val['4']; ?></dd>
											</dl>
											<div class="btn-holder">
												<a href="rooms2.php#" class="btn btn-default">Book Room</a>
												<strong class="rent-price">$ <?php echo $val['5']; ?> <span>per night</span></strong>
											</div>
										</div>
									</div>
								</div>
							</article>
							<!-- <article class="article">
								<div class="col-md-8 col-sm-12 col">
									<div class="image-frame"><img src="images/image-06.jpg" alt="image description"></div>
								</div>	
								<div class="col-md-4 col-sm-12 col">
									<div class="info-block">
										<div class="info-frame">
											<h1>Single Room</h1>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
											<dl class="detail-list">
												<dt>Bed:</dt>
												<dd>1 double bed</dd>
												<dt>Max:</dt>
												<dd>2 people</dd>
												<dt>Room size:</dt>
												<dd>32mp</dd>
											</dl>
											<div class="btn-holder">
												<a href="rooms2.php#" class="btn btn-default">Book Room</a>
												<strong class="rent-price">$235 <span>per night</span></strong>
											</div>
										</div>
									</div>
								</div>
							</article> -->
						</div>
						<!-- <div class="row">
							<div class="col-md-6 col-sm-12">
								<strong class="showing-results">Showing results: 3 to 11, total 42</strong>
							</div>
							<div class="col-md-6 col-sm-12">
								<nav class="paging">
									<strong class="heading">Page:</strong>
									<ul class="pagination">
										<li class="hidden">
											<a href="rooms2.php#" aria-label="Previous">
												<span aria-hidden="true" class="glyphicon glyphicon-triangle-right"></span>
											</a>
										</li>
										<li class="active"><a href="rooms2.php#">1</a></li>
										<li><a href="rooms2.php#">2</a></li>
										<li><a href="rooms2.php#">3</a></li>
										<li><a href="rooms2.php#">4</a></li>
										<li>
											<a href="rooms2.php#" aria-label="Previous">
												<span aria-hidden="true" class="glyphicon glyphicon-triangle-right"></span>
											</a>
										</li>
									</ul>
								</nav>
							</div>
						</div> -->
					</div>
				</div>
			</div>
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