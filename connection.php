<?php
$servername = "localhost";
$user = "root";
$pw = "";
$mydb="election";
$conn=new mysqli($servername,$user,$pw,$mydb);
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
?>
