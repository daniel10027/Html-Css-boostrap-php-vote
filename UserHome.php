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
  a:hover{
	  text-decoration:none;
  }
  </head>
<body>
<?php include('Header.html');?>
<div class="container-fluid bg-3 text-center"> 
	<div class="row">  
	<div class="col-sm-3"></div>
	<div class="col-sm-3">
		<div class="jumbotron text-center"  style="background-color:#61CDF5;color:white">
		<h3><span class="glyphicon glyphicon-user"></span></h3><h3>Register Yourself as a Candidate</h3><br>
		<button type="button" class="btn btn-info btn-block" data-toggle="modal" data-target="#myModal">Click Here</button>
		<!-- Modal -->
		<div class="modal fade" id="myModal" role="dialog" style="color:black">>
			<div class="modal-dialog">
		  <!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Candidate Registration</h4>
			</div>
			
			<div class="modal-body">
			<form method="post" action="CandidateControl.php">
			<div class="form-group">
				<label for="post">Select Post:</label>
				<select class="form-control" name="post" required>
				  <option value="" selected>Select POST</option>
				  <option value="cr">CR</option>
				  <option value="musicincharge">Music-Incharge</option>
				  <option value="culturalincharge">Cultural-Incharge</option>
				  <option value="sportincharge">Sports-Incharge</option>
				  <option value="ecellincharge">ECell-Incharge</option>
				  <option value="sortincharge">SOrt-Incharge</option>
				</select>
			</div>
			<div class="form-group">
				<label for="comment">Describe Yourself:</label>
				<textarea class="form-control" rows="5" id="comment" name="about"></textarea>
			</div>
			<button type="submit" class="btn btn-primary btn-block">Register</button>
			</form>
			</div>
			
			</div>
			</div>
		</div>
		</div>
	</div>
	<div class="col-sm-3">
		<div class="jumbotron text-center"  style="background-color:#f47469;color:white">
		<h3><span class="glyphicon glyphicon-pencil"></span></h3><h3>Vote! Vote!! Vote!!!<h3><br>
		<a href="VotingHome.php"><button type="button" class="btn btn-danger btn-block">Click Here</button></a>
		</div>
	</div>
	</div>
	<div class="row">
	<div class="col-sm-3"></div>
		<div class="col-sm-6">
			<div class="jumbotron"  style="background-color:lightgreen;color:white">
				<div class="row">
					<div class="col-sm-12">
						<h2><span class="glyphicon glyphicon-hourglass"></span> Timer</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
					<h2><?php include('Timer.php');?></h2>		
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row"> 
	<div class="col-sm-3"></div>
	<div class="col-sm-6">
		<div class="jumbotron"  style="background-color:#f7bc47;color:white">
			<div class="row">
				<div class="col-sm-12">
					<h2><span class="glyphicon glyphicon-list-alt"></span> Results</h2>
					<a href="ResultsHome.php"><button type="button" class="btn btn-warning btn-block">Click Here</button></a>
				</div>
			</div>
		</div>
	</div>
	</div>
</div> 
<?php include('Footer.html');?>
</body>
</html>