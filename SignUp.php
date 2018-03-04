<!DOCTYPE html>
<html lang="en">
<head>
  <title>e-ELECTION</title>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css"/>
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/js/bootstrapValidator.min.js"> </script>
  <script>
	$(document).ready(function() {
    $('#validateform').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            firstname: {
                validators: {
                    notEmpty: {
                        message: 'First name is required and cannot be empty'
                    }
                }
            },
           lastname: {
                validators: {
                    notEmpty: {
                        message: 'Last name is required and cannot be empty'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Email address is required and cannot be empty'
                    },
					emailAddress: {
                        message: 'Please supply a valid email address'
                    }
                }
            },
            remail: {
                validators: {
                    notEmpty: {
                        message: 'Alternative Email address is required and cannot be empty'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'Password is required and cannot be empty'
                    },
					stringLength: {
                        min: 8,
                        message: 'Your password must be at least 8 characters long'
                    }
                }
            },
			confirmpassword: {
                validators: {
                    notEmpty: {
                        message: 'Confirm password is required and cannot be empty'
                    },
					stringLength: {
                        min: 8,
                        message: 'Your password must be at least 8 characters long'
                    },
					identical: {
                    field: 'password',
                    message: 'The password and its confirm are not the same'
					}
                }
            },
			gender:{
				validators: {
                    notEmpty: {
                        message: 'Gender is required and cannot be empty'
                    }
				}
			},
			course:{
				validators: {
                    notEmpty: {
                        message: 'Course is required and cannot be empty'
                    }
				}
			},
			division:{
				validators: {
                    notEmpty: {
                        message: 'Division is required and cannot be empty'
                    }
				}
			},
			dob:{
				validators: {
                    notEmpty: {
                        message: 'Date Of Birth is required and cannot be empty'
                    }
				}
			},
			mobileno:{
				validators: {
                    notEmpty: {
                        message: 'Mobile Number is required and cannot be empty'
                    }
				}
			}
        }
    });
});
</script>
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
  </style>
</head>
<body>
<div class="example3">
  <nav class="navbar navbar-default  navbar-custom navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand"><img src="Icons/Logo.png" alt="Election">
        </a>
      </div>
      
    </div>
  </nav>
</div>
<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-8">
<div class="jumbotron" style="background-color:#61CDF5;color:white">
<div class="row">
<div class="col-sm-12">
<div class="container-fluid bg-3 text-center">
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
		<center><h1>SIGN UP</h1></center>
		<form id="validateform" name="signup" method="post" action="SignUpControl.php">
		<div class="form-group">
		<input type="text" class="form-control" name="firstname" placeholder="Enter your First Name">
		</div>
		<div class="form-group">
		<input type="text" class="form-control" name="lastname" placeholder="Enter your Last Name">
		</div>
		<div class="form-group">
		<input type="text" class="form-control" name="email" class="textsize" id= "email" placeholder="Enter your VES Email ID ONLY">
		</div>
		<div class="form-group">
		<input type="text"  class="form-control" name="remail" id ="remail"  class="textsize" placeholder="Enter your Alternative Email ID ">
		</div>
		<div class="form-group">
		<input type="password"  class="form-control" id="password" class="textsize" name="password" placeholder="Enter your Password">
		</div>
		<div class="form-group">
		<input type="password"  class="form-control" id="password" class="textsize" name="confirmpassword" placeholder="Confirm your Password">
		</div>
		<div class="form-group">
		<select name="gender" class="form-control">
        <option value="" selected>Select your Gender</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
		</select>
		</div>
		<div class="form-group">
		<select name="course" class="form-control">
        <option value="" selected>Select Course</option>
        <option value="Comp">Computer Engineering</option>
        <option value="Inft">Information Technology</option>
        <option value="Extr">Electonics</option>
        <option value="Extc">Electronics and Telecommunication</option>
        <option value="Instru">Instrumentation</option>
		<option value="HS">Humanities and Science</option>
        </select>
		</div>
		<div class="form-group">
		<select name="division" class="form-control">
        <option value="" selected>Select Division</option>
        <option value="fe">F.E</option>
        <option value="se">S.E</option>
        <option value="te">T.E</option>
        <option value="be">B.E</option>
        </select>
		</div>
		<div class="form-group">
		<input name="dob" id="dob" class="form-control" placeholder="Enter your DOB" onfocus="(this.type='date')" onfocusout="(this.type='text')" >
		</div>
		<div class="form-group">
		<input type="text" minlength="10" pattern="[0-9]{10}" class="form-control" name="mobileno" class="textsize" id="mobileno" placeholder="Enter your Mobile Number eg.,+91" >
		</div>
		<div class="form-group">
		<button type="submit" class="btn btn-success btn-block" name="submitButton">Sign Up</button>
		</div>
		<div class="form-group">
		<label>Already a Member? <a href="Index.php">Log In<a></label>
		</div>
		</form>
		<div class="col-sm-4"></div>
		</div>
	</div>
	</div>
</div>
</div>
</div>
</div>
</div>
<?php include('Footer.html');?>
</body>
</html>
