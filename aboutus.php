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
							<li class="active">About us</li>
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
			<!-- about us section -->
			<section class="about-us container add-padding">
				<div class="row">
					<div class="col-sm-6 animate" data-anim-type="fadeInUp" data-anim-delay="300">
						<div class="text-box">
							<h1><?php $val=data(1,'about'); echo $val['1']; ?></h1>
							<p><?php echo $val['2']; ?></p>
						</div>
					</div>
					<div class="col-sm-6 animate" data-anim-type="fadeInUp" data-anim-delay="600">
						<div class="image-frame"><img src="<?php echo $val['3']; ?>" alt="image description"></div>
					</div>
				</div>
			</section>
			<!-- about -->
			<section class="about container b-padding">
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
							<p><?php  echo $val['2']; ?></p>
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
			<!-- Services block -->
			<section class="services-block">
				<div class="image-frame" style="background-image: url('<?php $val=data(2,'about'); echo $val['3']; ?>');"></div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6 col-sm-12 pull-right">
							<div class="row">
								<div class="col-sm-6 col-md-12 col-lg-6 block downtown">
									<h2><?php $val=data(3,'about'); echo $val['1']; ?></h2>
									<p><?php echo $val['2']; ?></p>
								</div>
								<div class="col-sm-6 col-md-12 col-lg-6 block sea">
									<h2><?php $val=data(4,'about'); echo $val['1']; ?></h2>
									<p><?php $val=data(5,'about'); echo $val['2']; ?></p>
								</div>
								<div class="col-sm-6 col-md-12 col-lg-6 block pool">
									<h2><?php $val=data(6,'about'); echo $val['1']; ?></h2>
									<p><?php echo $val['2']; ?></p>
								</div>
								<div class="col-sm-6 col-md-12 col-lg-6 block playground">
									<h2><?php $val=data(7,'about'); echo $val['1']; ?></h2>
									<p><?php echo $val['2']; ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- our team -->
			
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