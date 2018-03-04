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
	.loader {
  border: 16px solid gold;
  border-radius: 50%;
  border-top: 16px solid #61CDF5;
  border-right: 16px solid lightgreen;
  border-bottom: 16px solid red;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}	
.container{
	transform:translateY(100%);
}
</style>
<script>
function animate()
{
		for(var i=0;i<=3;i++)
		{
			setTimeout(function()
			{
				$("h3").append("<b>.</b>");
			},i*1000);
		}
	}
</script>
</head>
<body onload="animate()">

<div class="container">
  <div class="row">
  <div class="col-sm-5"></div>
  <div class="col-sm-5">
  <div class="container">
	<div class="loader"></div>
		<p class="text-center">
		<div class="loading">
		<h3>Loading</h3>
		</div>
		</p>
		</div>
	</div>
  </div>
</div>
<?php header("Refresh: 1.5;url=UserHome.php"); ?>
</body>
</html>
