<?php
require('connection.php');

session_start();

$email=$_SESSION['username'];
$about=$_POST['about'];
$db=$_POST['post'];


$sql2 = "SELECT sex , divi FROM user where email = '$email' ";
$result = $conn->query($sql2);
if ($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
      $sex=$row['sex'];
      $div=$row['divi'];
    }
}
else
{
    echo "<center>Not in the Database...</center>";
}
$sql = "INSERT INTO $db (username,divi, sex ,about) VALUES ('$email','$div','$sex','$about')";

if ($conn->query($sql) === TRUE)
{
  echo "<script type='text/javascript'>alert('You have been registered Successfully.')</script>";
  header("Refresh: 0.5;url=UserHome.php");
}
else
{
  echo "Error: " . $sql . "<br>" . $conn->error;
  echo "<script type='text/javascript'>alert('Registration Failed')</script>";
  header("Refresh: 1;url=UserHome.php");
}

$conn->close();

?>
