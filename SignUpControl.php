<?php
session_start();
require('Connection.php');

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$cemail=$_POST['remail'];
$password=$_POST['password'];
$sex= $_POST['gender'];
$course= $_POST['course'];
$div= $_POST['division'];
$dob=$_POST['dob'];
$mobileno=$_POST['mobileno'];

$db="user";

$sql = "INSERT INTO $db (firstname, lastname, email,cemail,username,password,dob,mobileno,sex,course,divi) VALUES ('$firstname', '$lastname','$email','$cemail','$username','$password','$dob','$mobileno','$sex','$course','$div')";
if ($conn->query($sql) === TRUE)
{
  echo "<script type='text/javascript'>alert('You have been registered Successfully.')</script>";
  header("Refresh: 0.5;url=Index.php");
}
else
{
  echo "<script type='text/javascript'>alert('This user already exists.')</script>";
  header("Refresh: 0.5;url=SignUp.php");  
}

$conn->close();

?>
