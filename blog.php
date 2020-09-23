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
							<li class="active">Blog</li>
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
						</section> -->
						<!-- widget -->
						<!-- <section class="widget">
							<h1>gallery</h1>
							<div class="holder">
								<ul class="list-inline gallery">
									<li><a href="blog.php#"><img src="images/thumb-06.jpg" alt="image description"></a></li>
									<li><a href="blog.php#"><img src="images/thumb-07.jpg" alt="image description"></a></li>
									<li><a href="blog.php#"><img src="images/thumb-08.jpg" alt="image description"></a></li>
									<li><a href="blog.php#"><img src="images/thumb-09.jpg" alt="image description"></a></li>
									<li><a href="blog.php#"><img src="images/thumb-10.jpg" alt="image description"></a></li>
									<li><a href="blog.php#"><img src="images/thumb-11.jpg" alt="image description"></a></li>
								</ul>
							</div>
						</section> -->
						<!-- widget -->
						<!-- <section class="widget">
							<h1>Tags</h1>
							<div class="holder">
								<ul class="list tags list-inline">
									<li><a href="blog.php#">Hotel</a></li>
									<li><a href="blog.php#">Restaurant</a></li>
									<li><a href="blog.php#">Room</a></li>
									<li><a href="blog.php#">Wedding</a></li>
									<li><a href="blog.php#">Luxury</a></li>
									<li><a href="blog.php#">Party</a></li>
								</ul>
							</div>
						</section> -->
					<!-- </aside> -->
					<!-- content -->
					<div class="col-md-12 col-sm-8 content">
						<div class="row blog-posts">
							<article class="article">
								<div class="col-md-8 col-sm-12 col">
									<div class="image-frame">
										<div class="icon">
											<span class="icon-image"></span>
										</div>
										<img src="<?php $val=data(1,'blog'); echo $val['3']; ?>" alt="image description">
									</div>
								</div>	
								<div class="col-md-4 col-sm-12 col">
									<div class="info-block">
										<div class="info-frame">
											<h1><?php echo $val['1']; ?></h1>
											<!-- <ul class="list-inline metas">
												<li><a href="blog.php#"><span class="icon-folder-open"></span>Rooms</a></li>
												<li><span class="icon-calendar"></span>17, March</li>
											</ul> -->
											<p><?php echo $val['2']; ?></p>
											<div class="btn-holder">
												<a href="blog.php#" class="btn btn-default">Read More</a>
											</div>
										</div>
									</div>
								</div>
							</article>
							<article class="article">
								<div class="col-md-8 col-sm-12 col">
									<div id="carousel-example-generic" class="carousel image-slider slide" data-ride="carousel"> 
										<!-- Wrapper for slides -->
										<div class="carousel-inner">
											<div class="item active">
												<img src="<?php $val=data(2,'blog'); echo $val['3']; ?>" alt="image description">
											</div>
											<div class="item">
												<img src="<?php echo $val['4']; ?>" alt="image description">
											</div>
										</div>
										<!-- Controls -->
										<div class="buttons">
											<a class="left carousel-control" href="blog.php#carousel-example-generic" role="button" data-slide="prev">
												<span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
											</a>
											<a class="right carousel-control" href="blog.php#carousel-example-generic" role="button" data-slide="next">
												<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
											</a>
										</div>
									</div>
								</div>	
								<div class="col-md-4 col-sm-12 col">
									<div class="info-block">
										<div class="info-frame">
											<h1><?php echo $val['1']; ?></h1>
											<!-- <ul class="list-inline metas">
												<li><a href="blog.php#"><span class="icon-folder-open"></span>Events</a></li>
												<li><span class="icon-calendar"></span>17, March</li>
											</ul> -->
											<p><?php echo $val['2']; ?></p>
											<div class="btn-holder">
												<a href="blog.php#" class="btn btn-default">Read More</a>
											</div>
										</div>
									</div>
								</div>
							</article>
							<article class="article">
								<div class="col-md-8 col-sm-12 col">
									<div class="image-frame">
										<div class="icon">
											<span class="icon-play"></span>
										</div>
										<img src="<?php $val=data(3,'blog'); echo $val['3']; ?>" alt="image description">
									</div>
								</div>	
								<div class="col-md-4 col-sm-12 col">
									<div class="info-block">
										<div class="info-frame">
											<h1><?php echo $val['1']; ?></h1>
											<!-- <ul class="list-inline metas">
												<li><a href="blog.php#"><span class="icon-folder-open"></span>Rooms</a></li>
												<li><span class="icon-calendar"></span>17, March</li>
											</ul> -->
											<p><?php echo $val['2']; ?></p>
											<div class="btn-holder">
												<a href="blog.php#" class="btn btn-default">Read More</a>
											</div>
										</div>
									</div>
								</div>
							</article>
						</div>
						<!-- <div class="row">
							<div class="col-xs-12">
								<nav class="paging">
									<strong class="heading">Page:</strong>
									<ul class="pagination">
										<li class="hidden">
											<a href="blog.php#" aria-label="Previous">
												<span aria-hidden="true" class="glyphicon glyphicon-triangle-right"></span>
											</a>
										</li>
										<li class="active"><a href="blog.php#">1</a></li>
										<li><a href="blog.php#">2</a></li>
										<li><a href="blog.php#">3</a></li>
										<li><a href="blog.php#">4</a></li>
										<li>
											<a href="blog.php#" aria-label="Previous">
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