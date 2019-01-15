<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>AutoDelux</title>

	<!--====  viewport meta=======-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!--====  font awesome=======-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<!--====  bootstrap css =======-->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!--====  custom css=======-->
	<link rel="stylesheet" href="css/styles.css">
	<!--====  jquery=======-->
	<script src='js/jquery.js'></script>

	<!--==== bootstrap js=======-->
	<script src='js/bootstrap.min.js'></script>

	<!--====  cusmtom js=======-->
	<script src='js/main.js'></script>

</head>
<body>


	<div class="container">

		<header class="main-header">
			
			<h1 class="logo"><a href="index.php">AutoDelux</a></h1>

			<nav>
				

				<a href="mechanics.php">Our Mechanics</a>

				<?php 



				if($user->logged_in()) {

					?>
					<a href="profile.php">Profile</a>
					<a href="request_service.php">Request Service</a>
					<a href="logout.php">Logout</a>


					<?php 
				} else {


					?>
					<a href="services.php">Services</a>
					<a href="about_us.php">About Us</a>
					<a href="login.php">Login</a>
					<a href="register.php">Register</a>





					<?php 
				}

				?>

				
				
				
				

			</nav>

			<div class="menu">
				<i class="fa fa-bars"></i>
			</div>

		</header>

	</div>