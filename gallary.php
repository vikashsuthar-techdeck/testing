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
							<li class="active"><a href="gallary.php">Gallary</li>
							<li class=""><?php  ?></li>
						</ol>
					</div>
					<!-- <div class="col-xs-5">
						<a href="gallary.php" class="link">book a room</a>
					</div> -->
				</div>
			</div>
		</div>
		<!-- contain main informative part of the site -->
		<main id="main">
			<div class="container gen-padding">
				<div class="row">
					<!-- side bar -->
					<aside class="col-md-04 col-sm-4 sidebar">
						
					</aside>
					<!-- content -->
					<div class="col-md-12 col-sm-8 content">
						
						<?php 
						  $sel2= "SELECT * from category";
						  $data2 = mysqli_query($conn,$sel2);					
						?>
						<div class="row rooms">
							<?php  while($fetch2 = mysqli_fetch_row($data2))
								{
								$sel1= "SELECT * from gallary1 where c_id=$fetch2[0]";
						  		$data = mysqli_query($conn,$sel1);
						  		$fetch = mysqli_fetch_row($data);
							?>
								<article class="col-md-4 col-xs-6">
								
									<div class="box" >
										<a href="gallary1.php?imgid=<?php echo $fetch2[0]; ?>" >
											<sapn>
											<div class="image-frame"><img src="<?php echo $fetch[2]; ?>" alt="image description"></div>
											</sapn>
											<div class="info-block">
												<div class="info-frame">
													<h1><?php echo $fetch2['1']; ?></h1>
												</div>
											</div>
										</a>
									</div>
							
								</article>
							<?php } ?>	
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