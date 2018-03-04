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
  .example3 .navbar-brand {
  height: 80px;
}
.example3 .nav >li >a {
  padding-top: 30px;
  padding-bottom: 30px;
}
.navbar-default .navbar-nav>li>a:hover {
    color: #61CDF5 !important;
	border-bottom:1px solid #61CDF5;
}
.example3 .navbar-toggle {
  padding: 10px;
  margin: 25px 15px 25px 0;
}
.navbar-custom{
	background-color:white;
}
.navbar-default .navbar-nav>li>.logout:hover{
	color:black !important;
	border-bottom:1px solid black;
}
.navbar-default .navbar-nav>li>.contact:hover{
	color:gold !important;
	border-bottom:1px solid gold;
}
.navbar-default .navbar-nav>li>.about-us:hover{
	color:lightgreen !important;
	border-bottom:1px solid lightgreen;
}
.navbar-default .navbar-nav>li>.chooseus:hover{
	color:red !important;
	border-bottom:1px solid red;
}
.dropbtn {
    background-color:white;
    color: #777;
    padding: 30px;
    font-size: 14px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: white;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    color:orange !important;
	border-bottom:1px solid orange;
}
  </style>
</head>
<body>
<div class="example3">
  <nav class="navbar navbar-default  navbar-custom navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <a href="UserHome.php"class="navbar-brand"><img src="icons\Logo.png" alt="Election">
        </a>
      </div>
      <div id="navbar3" class="navbar-collapse collapse">
		<ul class="nav navbar-nav navbar-right">
		  <li><a href="AdminHome.php" class="home"><span class="glyphicon glyphicon-home"></span> HOME</a></li>
		  <li><a href="AboutUs.php" class="about-us"><span class="glyphicon glyphicon-user"></span> ABOUT US</a></li>
		  <li><a href="ContactUs.php" class="contact"><span class="glyphicon glyphicon-phone-alt"></span> CONTACT</a></li>
		  <li><a href="Logout.php" class="logout"><span class="glyphicon glyphicon-log-in"></span> LOGOUT</a></li>
		</ul>
      </div>
    </div>
  </nav>
</div>
</body>
</html>