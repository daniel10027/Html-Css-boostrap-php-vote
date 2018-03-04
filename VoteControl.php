<?php
  require('connection.php');
  session_start();
  $votername=$_SESSION['username'];
  
	if(isset($_POST['button']))
	{
	if((isset($_POST['nameOfUser'])) && (isset($_POST['post'])))
	{
		$candidatename=$_POST['nameOfUser'];
		$post=$_POST['post'];
	}
    $sql2 = "SELECT $post FROM user where email = '$votername' ";
    $result = $conn->query($sql2);
    if ($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
         $count=$row[$post];
		}
    }
    if($count != 1)
    {
  	  $query = "UPDATE user SET $post ='1' WHERE  email= '$votername'";
      $query2="UPDATE $post SET votes= votes+1 WHERE username='$candidatename'";
      $result=$conn->query($query);
      $result2=$conn->query($query2);

  		if($result==true && $result2==true)
  		{
        echo "<script type='text/javascript'>alert('You have Voted Successfully')</script>";
        header("Refresh: 0.5;url=UserHome.php");
  		}
      else
  		{
        echo "<script type='text/javascript'>alert('Some Error has occured.')</script>";
        header("Refresh: 0.5;url=UserHome.php");
  		}

    }
    else
    {
      echo "<script type='text/javascript'>alert('Sorry! You have already voted for a Candidate.')</script>";
      header("Refresh: 0.5;url=UserHome.php");
    }

	}

	if(isset($_POST['buttonf']))
	{
	if((isset($_POST['nameOfUserf'])) && (isset($_POST['postf'])))
	{
		$candidatenamef=$_POST['nameOfUserf'];
		$post=$_POST['postf'];
		$postf=$post."f";
	}	
    $sql2 = "SELECT $postf FROM user where email = '$votername' ";
    $result = $conn->query($sql2);
    if ($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
         $count=$row[$postf];
		}
    }
    if($count != 1)
    {
  	  $query = "UPDATE user SET $postf ='1' WHERE  email= '$votername'";
      $query2="UPDATE $post SET votes= votes+1 WHERE username='$candidatenamef'";
      $result=$conn->query($query);
      $result2=$conn->query($query2);

  		if($result==true && $result2==true)
  		{
        echo "<script type='text/javascript'>alert('You have Voted Successfully')</script>";
        header("Refresh: 0.5;url=UserHome.php");
  		}
      else
  		{
        echo "<script type='text/javascript'>alert('Some Error has occured.')</script>";
		header("Refresh: 0.5;url=UserHome.php");
  		}

    }
    else
    {
      echo "<script type='text/javascript'>alert('Sorry! You have already voted for a Candidate.')</script>";
      header("Refresh: 0.5;url=UserHome.php");
    }

	}
?>
