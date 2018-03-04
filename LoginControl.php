<?php
require('connection.php');

$email=$_POST['email'];
$password=$_POST['password'];
if($email=="admin" && $password=="admin")
{
	header("Location:AdminHome.php");
}
else{
$sql = "SELECT email,password FROM user where email='$email' && password='$password'";
$result = $conn->query($sql);
if ($result->num_rows > 0)
{
	while($row = $result->fetch_assoc())
	{
		if(($row['email']==$email) && ($row['password']==$password))
		{
			session_start();
			$_SESSION['username']=$email;
			header("Refresh: 0.2;url=Loading.php");
		}
	}		
}
else {
	echo "<script type='text/javascript'>alert('Invalid Credentials.')</script>";
	header("Refresh: 0.1;url=Index.php");
}
$conn->close();
}
?>
