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
  .cards{
  background-color:white !important;
  text-align: center !important;
  width:100% !important;
  height:100% !important;
  display: inline-block !important;
  transition: all .3s ease-in-out !important;
  }
  #c1{
    box-shadow: 0 4px 50px 0 lightblue,0 6px 20px 0 #777;
  }
  #c2{
    box-shadow:0 4px 50px 0 pink,0 6px 20px 0 #777;
  }
  </style>
  </head>
  <body>
  <?php include('Header.html');?>
  <center><h1> Congratulations to all the winners!</h1></center>
  <canvas id="canvas" width="50" height="50"></canvas>
  <div class="container">
  <div class='row'>
  <?php
	require('connection.php');
	if($_POST['button']=="Class Representative")
	{
		$table="cr";
	}
	else if($_POST['button']=="Music Incharge")
	{
		$table="musicincharge";
	}
	else if($_POST['button']=="Cultural Incharge")
	{
		$table="culturalincharge";
	}
	else if($_POST['button']=="SOrt Incharge")
	{
		$table="sortincharge";
	}
	else if($_POST['button']=="Sports Incharge")
	{
		$table="sportincharge";
	}
	else if($_POST['button']=="Ecell Incharge")
	{
		$table="ecellincharge";
	}
	$sql="SELECT MAX(votes) FROM $table where sex='male'";
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc())
	{
		$votes=$row['MAX(votes)'];
	}
	$sql2 = "select username from $table where votes='$votes'";
	$result2 = $conn->query($sql2);
	while($row = $result2->fetch_assoc())
	{
		$email=$row['username'];
	}
	$sql1 = "SELECT * FROM user where email='$email'";
	$result1 = $conn->query($sql1);
	if ($result1->num_rows > 0)
	{
		while($row = $result1->fetch_assoc())
			{
				echo "
						<div class='col-sm-1'></div>
						<div class='col-sm-4'>
							<div class='cards' id='c1'>
								<div class='row'>
									<div class='col-sm-12'>
										<img class='img-responsive' style='width:100% alt='Image' src='icons/male.jpg'>
									</div>
									<div class='col-sm-12'>
										Name:<b>".$row['firstname']." ".$row['lastname']."</b>
									</div>
									<div class='col-sm-12'>
										Division:<b>".$row['course']." ".$row['divi']."</b>
									</div>
									<div class='col-sm-12'>
										Contact Number:<b>".$row['mobileno']."</b>
									</div>
									<div class='col-sm-12'>
										Email ID:<b>".$row['email']."</b>
									</div>
									<div class='col-sm-12'>
									Votes Received:<b>".$votes."</b>
									</div>
								</div>
							</div>
						</div>
					";
			}
	}
	?>
	<?php
	$sql="SELECT MAX(votes) FROM $table where sex='female'";
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc())
	{
		$votes=$row['MAX(votes)'];
	}
	$sql2 = "select username from $table where votes='$votes'";
	$result2 = $conn->query($sql2);
	while($row = $result2->fetch_assoc())
	{
		$email=$row['username'];
	}
	$sql1 = "SELECT * FROM user where email='$email'";
	if ($result1->num_rows > 0)
	{
		while($row = $result1->fetch_assoc())
			{
				echo " <div class='col-sm-2'></div>
						<div class='col-sm-1'></div>
						<div class='col-sm-4'>
							<div class='cards' id='c2'>
								<div class='row'>
									<div class='col-sm-12'>
										<img class='img-responsive' style='width:100% alt='Image' src='icons/female.jpg'>
									</div>
									<div class='col-sm-12'>
										Name:<b>".$row['firstname']." ".$row['lastname']."</b>
									</div>
									<div class='col-sm-12'>
										Division:<b>".$row['course']." ".$row['divi']."</b>
									</div>
									<div class='col-sm-12'>
										Contact Number:<b>".$row['mobileno']."</b>
									</div>
									<div class='col-sm-12'>
										Email ID:<b>".$row['email']."</b>
									</div>
									<div class='col-sm-12'>
									Votes Received:<b>".$votes."</b>
									</div>
								</div>
							</div>
						</div>
					";
			}
	}
  ?>
</div>
</div>
<?php include('confetti.html');?>
<?php include('Footer.html');?>
</body>
</html>