<?php
	require './includes/common.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>shoeStock</title>
		<!-- link to Bootstrap minified css-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- link to Jquery minified-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- link to Bootstrap JS -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<!-- link to fontawesome CSS-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- link to external CSS -->
		<link rel="stylesheet" type="text/css" href="index.css">
	</head>
	<body>
		<?php
			require './includes/header.php';
			require './includes/check-if-added.php';
		?>
		<div class="container panel-margin">
			<div class="jumbotron">
				<h1>Welcome to our shoeStock !</h1>
				<p>We have the best collection of shoes, sneakers, boots and sandals for you. Shop-in for better quality.</p>
			</div>
			<div class="row text-center">
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="images/shoe.jpg" alt="shoe">
						<div class="caption">
							<h3>Shoe 1</h3>
							<p>Price: <i class="fa fa-rupee"></i> 2,000</p>
							<?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(1)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="images/shoe.jpg" alt="shoe">
						<div class="caption">
							<h3>Shoe 2</h3>
							<p>Price: <i class="fa fa-rupee"></i> 2,000</p>
							<?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(2)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=2" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="images/shoe.jpg" alt="shoe">
						<div class="caption">
							<h3>Shoe 3</h3>
							<p>Price: <i class="fa fa-rupee"></i> 2,000</p>
							<?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(3)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=3" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="images/shoe.jpg" alt="shoe">
						<div class="caption">
							<h3>Shoe 4</h3>
							<p>Price: <i class="fa fa-rupee"></i> 2,000</p>
							<?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(4)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=4" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
			</div>
			<div class="row text-center">
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="images/sneakers.jpg" alt="sneakers">
						<div class="caption">
							<h3>Sneaker 1</h3>
							<p>Price: <i class="fa fa-rupee"></i> 4,000</p>
							<?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(5)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=5" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="images/sneakers.jpg" alt="sneakers">
						<div class="caption">
							<h3>Sneaker 2</h3>
							<p>Price: <i class="fa fa-rupee"></i> 4,000</p>
							<?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(6)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=6" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="images/sneakers.jpg" alt="sneakers">
						<div class="caption">
							<h3>Sneaker 3</h3>
							<p>Price: <i class="fa fa-rupee"></i> 4,000</p>
							<?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(7)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=7" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="images/sneakers.jpg" alt="sneakers">
						<div class="caption">
							<h3>Sneaker 4</h3>
							<p>Price: <i class="fa fa-rupee"></i> 4,000</p>
							<?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(8)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=8" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
			</div>
			<div class="row text-center">
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="images/boots.jpg" alt="boots">
						<div class="caption">
							<h3>Boot 1</h3>
							<p>Price: <i class="fa fa-rupee"></i> 2,500</p>
							<?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(9)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=9" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="images/boots.jpg" alt="boots">
						<div class="caption">
							<h3>Boot 2</h3>
							<p>Price: <i class="fa fa-rupee"></i> 2,500</p>
							<?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(10)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=10" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="images/boots.jpg" alt="boots">
						<div class="caption">
							<h3>Boot 3</h3>
							<p>Price: <i class="fa fa-rupee"></i> 2,500</p>
							<?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(11)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=11" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="images/boots.jpg" alt="boots">
						<div class="caption">
							<h3>Boot 4</h3>
							<p>Price: <i class="fa fa-rupee"></i> 2,500</p>
							<?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(12)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=12" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
			</div>
					<div class="row text-center">
						<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="images/sandal.jpg" alt="sandal">
						<div class="caption">
							<h3>Sandal 1</h3>
							<p>Price: <i class="fa fa-rupee"></i> 2,000</p>
							<?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(13)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=13" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
						<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="images/sandal.jpg" alt="sandal">
						<div class="caption">
							<h3>Sandal 2</h3>
							<p>Price: <i class="fa fa-rupee"></i> 2,000</p>
							<?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(14)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=14" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
						<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="images/sandal.jpg" alt="sandal">
						<div class="caption">
							<h3>Sandal 3</h3>
							<p>Price: <i class="fa fa-rupee"></i> 2,000</p>
							<?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(15)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=15" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
						<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="images/sandal.jpg" alt="sandal">
						<div class="caption">
							<h3>Sandal 4</h3>
							<p>Price: <i class="fa fa-rupee"></i> 2,000</p>
							<?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(16)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=16" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
			</div>
			<div class="row text-center">
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="images/sleeper.jpg" alt="sleeper">
						<div class="caption">
							<h3>Sleeper 1</h3>
							<p>Price: <i class="fa fa-rupee"></i> 500</p>
							<?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(17)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=17" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="images/sleeper.jpg" alt="sleeper">
						<div class="caption">
							<h3>Sleeper 2</h3>
							<p>Price: <i class="fa fa-rupee"></i> 500</p>
							<?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(18)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=18" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="images/sleeper.jpg" alt="sleeper">
						<div class="caption">
							<h3>Sleeper 3</h3>
							<p>Price: <i class="fa fa-rupee"></i> 500</p>
							<?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(19)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=19" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="images/sleeper.jpg" alt="sleeper">
						<div class="caption">
							<h3>Sleeper 4</h3>
							<p>Price: <i class="fa fa-rupee"></i> 500</p>
							<?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(20)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=20" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
		</div>
		<div class="row text-center">
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="images/belly.jpg" alt="belly">
						<div class="caption">
							<h3>Belly Shoe 1</h3>
							<p>Price: <i class="fa fa-rupee"></i> 1,000</p>
							<?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(21)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=21" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="images/belly.jpg" alt="belly">
						<div class="caption">
							<h3>Belly Shoe 2</h3>
							<p>Price: <i class="fa fa-rupee"></i> 1,000</p>
							<?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(22)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=22" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="images/belly.jpg" alt="belly">
						<div class="caption">
							<h3>Belly Shoe 3</h3>
							<p>Price: <i class="fa fa-rupee"></i> 1,000</p>
							<?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(23)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=23" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="images/belly.jpg" alt="belly">
						<div class="caption">
							<h3>Belly Shoe 4</h3>
							<p>Price: <i class="fa fa-rupee"></i> 1,000</p>
							<?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(24)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=24" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
			require './includes/footer.php';
		?>
	</body>
</html>