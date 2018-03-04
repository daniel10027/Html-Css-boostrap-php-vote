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
  .btn-custom{
	  background-color:pink;
  }
  </style>
  </head>
<body>
<?php include('Header.html');?>
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
$sql2 = "SELECT * FROM  $table";
$result2 = $conn->query($sql2);
if ($result2->num_rows > 0)
{
    while($row = $result2->fetch_assoc())
    {
      $div=$row['divi'];
    }
}
if(empty($div))
{
	$div="";
}
echo "  <div class='container'><div class='row'>";
$sql = "SELECT * FROM  $table WHERE divi='$div'and sex='male' ";
$result = $conn->query($sql);
if ($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
      echo"				<div class='col-sm-4'>
							<div class='cards' id='c1'>
								<div class='row'>
									<div class='col-sm-12'>
									<img class='img-responsive' style='width:75% alt='Image' src='icons/male.jpg'>
									</div>
								</div>
								<div class='row'>								
									<div class='col-sm-12'>
									Username:<b>".$row['username']."</b>
									</div>
								</div>
								<div class='row'>									
									<div class='col-sm-12'>
									Gender:<b>" . $row['sex']."</b>
									</div>
								</div>	
								<div class='row'>									
									<div class='col-sm-12'>
									About:<b>" . $row['about']."</b>
									</div>
								</div>
								<div class='row'>
									<div class='col-sm-12'>
										<form action='VoteControl.php' method='post'>
											<input type='submit' name='button'  class='btn btn-primary' value='Vote'>  
											<input type='hidden' name='nameOfUser' value='".$row['username']."'>
											<input type='hidden' name='post' value='$table'>
										</form>
									</div>
								</div>	
							</div>
						</div>";
    }
}
else
{
    echo "<center>No Candidates</center>";
}
echo "</div></div>";
$sql2 = "SELECT * FROM  $table";
$result2 = $conn->query($sql2);
if ($result2->num_rows > 0)
{
    while($row = $result2->fetch_assoc())
    {
      $div=$row['divi'];
    }
}
if(empty($div))
{
	$div="";
}
echo "<hr>  <div class='container'><div class='row'>";
$sql = "SELECT * FROM  $table WHERE divi='$div'and sex='female' ";
$result = $conn->query($sql);
if ($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
	        echo"		<div class='col-sm-4'>
							<div class='cards' id='c2'>
								<div class='row'>
									<div class='col-sm-12'>
									<img class='img-responsive' style='width:75% alt='Image' src='icons/female.jpg'>
									</div>
								</div>
								<div class='row'>								
									<div class='col-sm-12'>
									Username:<b>".$row['username']."</b>
									</div>
								</div>
								<div class='row'>									
									<div class='col-sm-12'>
									Gender:<b>" . $row['sex']."</b>
									</div>
								</div>	
								<div class='row'>									
									<div class='col-sm-12'>
									About:<b>" . $row['about']."</b>
									</div>
								</div>
								<div class='row'>
									<div class='col-sm-12'>
										<form action='VoteControl.php' method='post'>
											<input type='submit' name='button'  class='btn btn-custom' value='Vote'>  
											<input type='hidden' name='nameOfUser' value='".$row['username']."'>
											<input type='hidden' name='post' value='$table'>
										</form>
									</div>
								</div>	
							</div>
						</div>";
    }
}
else
{
    echo "<center>No Candidates</center>";
}
echo "</div></div>";
$conn->close();
?>
<?php include('Footer.html');?>
</body>
</html>
