<!DOCTYPE html>
<html lang="en">
<head>
  <title>e-ELECTION</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
<body>
<?php include('AdminHeader.php');?>
<div class="container-fluid bg-3 text-center">  
<div class="row">  
<div class="col-sm-3">
</div>
<div class="col-sm-6">
	<div class="jumbotron text-center"  style="background-color:#61CDF5;color:white">
		<div class="col-sm-12">
			<form action="" method="post">
			<input type="submit" name="submit" class="btn btn-primary btn-block" value="Start Elections" >
			</form>
			<?php
			session_start();
			if(isset($_POST['submit']))
			{
				if(empty($_SESSION['started']))
				{
					include('connection.php');
					date_default_timezone_set("Asia/Kolkata");
					$d=date("m-d-Y h:i a");
					$d1=date("d");
					$d1=$d1+2;
					$d2=date("m-$d1-Y h:i a");
					$sql = "INSERT INTO elections (name, fromdate,todate) VALUES ('cr', '$d','$d2')";
					$conn->query($sql);
					$sql1 = "INSERT INTO elections (name, fromdate,todate) VALUES ('mi', '$d','$d2')";
					$conn->query($sql1);
					$sql2 = "INSERT INTO elections (name, fromdate,todate) VALUES ('sort','$d','$d2')";
					$conn->query($sql2);
					$sql3 = "INSERT INTO elections (name, fromdate,todate) VALUES ('ecell', '$d','$d2')";
					$conn->query($sql3);
					$sql4 = "INSERT INTO elections (name, fromdate,todate) VALUES ('ci', '$d','$d2')";
					$conn->query($sql4);
					$sql5 = "INSERT INTO elections (name, fromdate,todate) VALUES ('si','$d','$d2')";
					$conn->query($sql5);
					$_SESSION['started']=1;
				}
				else
				{
					echo "<h2>Election has already Started.</h2>";
					echo "<script>document.getElementById('submit').style.display='none';</script>";
				}
			}			
			?>
		</div>
		<br><br><br>
	</div>	
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