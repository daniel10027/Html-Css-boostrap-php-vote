<!DOCTYPE html>
<html lang="en">

<head>
	<title>e-ELECTION</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
		#Signup:hover {
			color: red !important;
		}
	</style>
</head>

<body>
	<?php include('IndexHeader.html');?>
	<div class="container">
		<div class="jumbotron" style="background-color:#61CDF5;color:white">
			<div class="row">
				<div class="col-sm-7">
					<h1>e-ELECTION</h1>
					<p>
						<h3>Vote for a better Tomorrow.</h3>
							<h3><br> e-ELECTION is an Electronic Voting system which allows electronic casting and counting of votes in a secured
								and user friendly manner.</h3>
					</p>
				</div>
				<div class="col-sm-1"></div>
				<div class="col-sm-5">
					<div class="container-fluid bg-3 text-center">
						<div class="row">
							<div class="col-sm-12">
								<div class="container">
									<br>
									<center>
										<h2>Login</h2>
									</center>
									<form id="validateform" name="login" method="post" action="LoginControl.php">
										<div class="form-group">
											<input type="text" class="form-control" name="email" id="usr" placeholder="Enter your email ID" required>
										</div>
										<div class="form-group">
											<input type="password" class="form-control" name="password" id="pwd" placeholder="Enter your password" required>
										</div>
										<input type="submit" name="submit" class="btn btn-success btn-block" value="Login"><br>
										<center>
											<label>Don't have an account? <a href="SignUp.php" id="Signup">Register now!</a></label>
										</center>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid bg-3 text-center">
			<div class="row">
				<div class="col-sm-3">
					<p class="text-justify">
						<h3 style="color:#555555;">User Friendly</h3><br> The user interface is designed keeping in mind that many people are not computer savvy. Punching
						in the verification code is like punching in simple numbers or characters.</p>
				</div>
				<div class="col-sm-3">
					<p class="text-justify">
						<h3 style="color:#555555;">Convenient and Precise</h3><br> It is a very comfortable and convenient application to use. There are no chances of
						human errors as everything is automated and is integrated with systematic procedures. </p>
				</div>
				<div class="col-sm-3">
					<p class="text-justify">
						<h3 style="color:#555555;">Voting Integrity</h3><br> Voter can only vote once and voting choices remain anonymous. Each ballot has one, secure
						voting key.</p>
				</div>
				<div class="col-sm-3">
					<p class="text-justify">
						<h3 style="color:#555555;">Awesome Support</h3><br> Extensive help available and the best email support this side of the internet, although you
						likely won’t need it!</p>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-sm-6">
					<br>
				</div>
			</div>
		</div>
		<?php include('Footer.html');?>
</body>

</html>