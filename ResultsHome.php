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
  text-align: center;
  width:100%;
  height:100%;
  display: inline-block;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  transition: all .3s ease-in-out;
  }
  .cards:hover{
    box-shadow:0 4px 50px 0 #61CDF5,0 6px 20px 0 #777;
    width: 105%;
    height:105%;
  }
  #c1:hover{
    box-shadow:0 4px 50px 0 #36454f,0 6px 20px 0 #777;
  }
  #c2:hover{
    box-shadow:0 4px 50px 0 red,0 6px 20px 0 #777;
  }
  #c3:hover{
    box-shadow:0 4px 50px 0 #337ab7,0 6px 20px 0 #777;
  }

  #c4:hover{
    box-shadow:0 4px 50px 0 green,0 6px 20px 0 #777;
  }
  #c5:hover{
    box-shadow:0 4px 50px 0 orange,0 6px 20px 0 #777;
  }
  #c6:hover{
    box-shadow:0 4px 50px 0 #f2e602,0 6px 20px 0 #777;
  }
  .btn-custom{
	  color:white;
	  background:#36454f;
  }
  .btn-custom:hover{
	  color:white !important;
	  background:black;
  }
  .btn-custom1{
	  background:gold;
	  color:white;
  }
  .btn-custom1:hover{
	  color:white !important;
	  background:#f2e602;
  }
  </style>
  </head>
<body>
<?php include('Header.html');?>
<div class="container">
<form  name="Homeform" action="Results.php" method="post">
  <div class="row">
	  <div class="col-sm-4">
		<div class="cards" id="c1">
		  <div class="row">
	  			<div class="col-sm-12">
		    		<center><img src="icons\cr.png" class="img-responsive" style="width:80%" alt="Image"></center>
		    	</div>
		  </div>
		  <div class="row">
		   		<div class="col-sm-12">
		    		<input type='submit' name='button' class="btn btn-custom" value='Class Representative'>
		    	</div>
		  </div>
		    		<div class="row">
		   		<div class="col-sm-12">
				<br>
		    	</div>
		  </div>
		 </div>
	  </div>
	  <div class="col-sm-4">
	  		<div class="cards" id="c2">
		  <div class="row">
	  			<div class="col-sm-12">
		    		<center><img class="img-responsive" style="width:80% alt="Image" src="icons\music.png"></center>
		    	</div>
		  </div>
		  <div class="row">
		   		<div class="col-sm-12">
		    		<input type='submit' name='button' class="btn btn-danger" value='Music Incharge'>
		    	</div>
		  </div>
		<div class="row">
		   		<div class="col-sm-12">
				<br>
		    	</div>
		  </div>
		 </div>
	  </div>
	  <div class="col-sm-4">
	  		<div class="cards" id="c3">
		  <div class="row">
	  			<div class="col-sm-12">
		    		<center><img class="img-responsive" style="width:80%" alt="Image"  src="icons\cultural.png"></center>
		    	</div>
		  </div>
		  <div class="row">
		   		<div class="col-sm-12">
		    		<input type='submit' name='button' class="btn btn-primary" value='Cultural Incharge'>
		    	</div>
		  </div>
		<div class="row">
		   		<div class="col-sm-12">
				<br>
		    	</div>
		  </div>
		 </div>
	  </div>
  </div>
  <div class="row">
		  <div class="col-sm-12">
				<br><br>
		    	</div>
	</div>
	
  <div class="row">
	  <div class="col-sm-4">
	  		<div class="cards" id="c4">
		  <div class="row">
	  			<div class="col-sm-12">
		    		<center><img class="img-responsive" style="width:80%" alt="Image"  src="icons\sort.png"></center>
		    	</div>
		  </div>
		  <div class="row">
		   		<div class="col-sm-12"><br>
		    		<input type='submit' name='button'  class="btn btn-success" value='SOrt Incharge'>
		    	</div>
		  </div>
		  		<div class="row">
		   		<div class="col-sm-12">
				<br>
		    	</div>
		  </div>
		 </div>
	  </div>
	  <div class="col-sm-4">
	  		<div class="cards" id="c5">
		  <div class="row">
	  			<div class="col-sm-12">
		    		<center><img class="img-responsive" style="width:80%" alt="Image"  src="icons\sport.png"></center>
		    	</div>
		  </div>
		  <div class="row">
		   		<div class="col-sm-12">
		    		<input type='submit' name='button'  class="btn btn-warning" value='Sports Incharge'>
		    	</div>
		  </div>
		<div class="row">
		   		<div class="col-sm-12">
				<br>
		    	</div>
		  </div>
		 </div>
	  </div>
	  <div class="col-sm-4">
	  		<div class="cards" id="c6">
		  <div class="row">
	  			<div class="col-sm-12">
		    		<center><img class="img-responsive" style="width:80%" alt="Image"  src="icons\E-cell.png"></center>
		    	</div>
		  </div>
		  <div class="row">
		   		<div class="col-sm-12">
		   			<input type='submit' name='button' class="btn btn-custom1" value='Ecell Incharge'>
		    	</div>
		  </div>
		<div class="row">
		   		<div class="col-sm-12">
				<br>
		    	</div>
		  </div>
		 </div>
	  </div>
  </div>
  </form>
</div>
<?php include('Footer.html');?>
</body>
</html>
