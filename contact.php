<?php 
  	include('config/connection.php');

	@$name=$_POST['Name'];
	@$email=$_POST['Email'];
	@$phone=$_POST['Phone'];
	@$message=$_POST['Message'];

	if ($name!="" and $email!="" and $phone!="" and $message!="") 
	{
	 $ins="INSERT into contact set Name='$name', Email='$email', Phone='$phone', Message='$message'";
	 $exe=mysqli_query($conn,$ins);
	 
	 header("Location:contact.php");
	}

	$sel="SELECT * FROM contact_info";
	$result=mysqli_query($conn,$sel);
	$fetch=mysqli_fetch_assoc($result);

	// echo $fetch['id'];

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
							<li class="active">Contact</li>
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
			<div class="container">
				<div class="contact g-padding">
					<div class="row">
						<div class="col-xs-12">
							<h1>let’s drink a coffee</h1>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<p><?php echo $fetch['Text']; ?></p>
							<from method="post">
								<dl class="contact-info">
									<dt><span class="icon-location"></span>Address:</dt>
									<dd><?php echo $fetch['Address']; ?></dd>
									<dt><span class="icon-phone"></span>Phone:</dt>
									<dd><a href="tel:400748978045"><?php echo $fetch['Phone']; ?></a></dd>
									<dt><span class="icon-paperplane"></span>E-MAIL:</dt>
									<dd><?php echo $fetch['Email']; ?></dd>
								</dl>
							</from>
						</div>
						<div class="col-sm-6">
							<form method="post" class="contact-form">
								<div class="form-group">
									<label for="f-name">*Full Name</label>
									<input id="f-name" type="text" name="Name" class="form-control">
								</div>
								<div class="form-group">
									<label for="email">*Email</label>
									<input id="email" type="email" name="Email" class="form-control">
								</div>
								<div class="form-group">
									<label for="website">Phone</label>
									<input id="website" type="text" name="Phone" class="form-control">
								</div>
								<div class="form-group">
									<label for="comment">Message</label>
									<textarea id="comment" class="form-control" name="Message" rows="8" cols="45"></textarea>
								</div>
								<input class="btn btn-default" type="submit" value="Send Message">
							</form>
						</div>
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