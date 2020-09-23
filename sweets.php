<?php 
  	include('config/connection.php');
  	
  	include('config/insertq.php');
  	

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
							<li><a href="rooms2.php">rooms</a></li>
							<li class="active">	Suite Room Detail</li>
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
			<!-- Room details -->
			<section class="room-details container gen-padding">
				<div class="row">
					<div class="col-sm-6">
						<div id="flex-slider" class="flexslider">
							<ul class="slides">
								<li>
									<!-- <div class="information-box">
										<a class="fancybox magnify" href="images/img13.jpg"></a>
										<ul class="list-inline social-networks">
											<li><a href="room-detail.php#"><span class="icon-facebook"></span></a></li>
											<li><a href="room-detail.php#"><span class="icon-twitter"></span></a></li>
											<li><a href="room-detail.php#"><span class="icon-youtube"></span></a></li>
											<li><a href="room-detail.php#"><span class="icon-instagram"></span></a></li>
											<li><a href="room-detail.php#"><span class="icon-google"></span></a></li>
										</ul>
									</div> -->
									<img src="<?php  $val=data(5,'room_details'); echo $val['2']; ?>" alt="image description">
								</li>
								<li>
									<!-- <div class="information-box">
										<a class="fancybox magnify" href="images/img13.jpg"></a>
										<ul class="list-inline social-networks">
											<li><a href="room-detail.php#"><span class="icon-facebook"></span></a></li>
											<li><a href="room-detail.php#"><span class="icon-twitter"></span></a></li>
											<li><a href="room-detail.php#"><span class="icon-youtube"></span></a></li>
											<li><a href="room-detail.php#"><span class="icon-instagram"></span></a></li>
											<li><a href="room-detail.php#"><span class="icon-google"></span></a></li>
										</ul>
									</div> -->
									<img src="<?php  $val=data(6,'room_details'); echo $val['2']; ?>" alt="image description">
								</li>
								<li>
									<!-- <div class="information-box">
										<a class="fancybox magnify" href="images/img13.jpg"></a>
										<ul class="list-inline social-networks">
											<li><a href="room-detail.php#"><span class="icon-facebook"></span></a></li>
											<li><a href="room-detail.php#"><span class="icon-twitter"></span></a></li>
											<li><a href="room-detail.php#"><span class="icon-youtube"></span></a></li>
											<li><a href="room-detail.php#"><span class="icon-instagram"></span></a></li>
											<li><a href="room-detail.php#"><span class="icon-google"></span></a></li>
										</ul>
									</div> -->
									<img src="<?php  $val=data(7,'room_details'); echo $val['2']; ?>" alt="image description">
								</li>
							</ul>
						</div>
						<div id="thumbnails" class="flexslider">
							<ul class="slides">
								<li> <img src="<?php  $val=data(5,'room_details'); echo $val['2']; ?>" alt="image description"> </li>
								<li> <img src="<?php  $val=data(6,'room_details'); echo $val['2']; ?>" alt="image description"> </li>
								<li> <img src="<?php  $val=data(7,'room_details'); echo $val['2']; ?>" alt="image description"> </li>
							</ul>
						</div>
					</div>	
					<div class="col-sm-6 info-frame">
						<h1>Suite room</h1>
						<p><?php  $val=data(5,'room_details'); echo $val['1']; ?></p>
						<ul class="detail-list list-unstyled">
							<li><strong>Bed:</strong><?php  $val=data(2,'rooms'); echo $val['2']; ?></li>
							<li><strong>Max:</strong> <?php  echo $val['3']; ?></li>
							<li><strong>Availability:</strong><?php  $val=data(2,'room_details'); echo $val['3']; ?></li>
							<li><strong>Room size:</strong><?php  $val=data(2,'rooms'); echo $val['4']; ?></li>
						</ul>
						<div class="btn-holder">
							<a href="room-detail.php#" class="btn btn-default">Book Room</a>
							<strong class="rent-price">$<?php  $val=data(2,'rooms'); echo $val['5']; ?><span>per night</span></strong>
						</div>
					</div>
				</div>
			</section>
			<!-- Description block -->
			<article class="description-block container b-padding">
				<div class="row">
					<div class="col-md-3 col-sm-4">
						<h1>Description</h1>
						<p><?php  $val=data(8,'room_details'); echo $val['1']; ?></p>
					</div>
					<div class="col-md-9 col-sm-8">
						<div class="image-frame">
							<h1>Description</h1>
							<img src="<?php  $val=data(8,'room_details'); echo $val['2']; ?>" alt="image description">
						</div>
					</div>
				</div>
			</article>
			<!-- gallery-block -->
			
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