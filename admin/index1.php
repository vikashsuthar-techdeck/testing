<?php include("upper.php");?>
<?php include("header.php");
if(isset($_POST['s1']))
{


}

?>

<main id="main">
			<div class="container">
				<div class="contact g-padding">
					<form action="#" class="billing-form" method="POST" enctype="multipart/form-data">
						<div class="section">
							<div class="row">
								<div class="col-xs-12">
									<h1>HOME</h1>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										
										<input id="f-name" name="title" type="text" class="form-control" Value="" required="required">
									</div>
									<div class="form-group">
										
										<input id="l-name" name="head" type="text" class="form-control" value="" required="required">
									</div>
									<div class="form-group">
										<input type="submit" name="s1" class="btn btn-default" value="Update">
									</div>
							</div>
						</div>
					   </div>
					</form>
				</div>
			</div>
		</main>

<?php include("footer.php");?>