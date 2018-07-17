<!DOCTYPE html>
<html class="no-js">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>BUY|SELL|EXCHANGE your books with us</title>
		<meta name="description" content="Twitter Bootstrap Modal Login Popup - Social Login Popup ">
		<meta name="viewport" content="width=device-width, initial-scale=1">	
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/font-awesome.min.css"/>
		<link rel="stylesheet" href="css/style.css" />
		<script src="js/vendor/modernizr-2.6.2.min.js"></script>
		<script src="js/vendor/jquery-1.10.2.min.js"></script>
		<script src="js/vendor/bootstrap.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>


	</head>
	<body>
<nav>
			<div>
				<button id='modal-launcher' class="btn btn-primary btn-1" onclick="location.replace('index.php')">Home</button>
			</div>
			<div></div>
			<div><button id='modal-launcher' class="btn btn-primary btn-1" data-toggle="modal" data-target="#login-modal">
					  Sign In
					</button></div>
		</nav>
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
    	<div class="modal-content">
      		<div class="modal-header login_modal_header">

        		<h2 class="modal-title" id="myModalLabel">Login</h2>
      		</div>
      		<div class="modal-body login-modal">

      			<div class="clearfix"></div>
      			<div id='social-icons-conatainer'>
	        		<div class='modal-body-left'>
	        			<div class="form-group">
		              		<input type="text" id="username" placeholder="Enter your name" value="" class="form-control login-field">
		              		<i class="fa fa-user login-field-icon"></i>
		            	</div>

		            	<div class="form-group">
		            	  	<input type="password" id="login-pass" placeholder="Password" value="" class="form-control login-field">
		              		<i class="fa fa-lock login-field-icon"></i>
		            	</div>

		            		<a href="#" class="btn btn-success modal-login-btn">Login</a>
		            		<p>Forgot password?</p>
	        			</div>

	        		<div class='modal-body-right'>
	        			<div class="modal-social-icons">
	        				<p>Sign in with</p>
	        				<a href='#' class="btn btn-default facebook"> <i class="fa fa-facebook modal-icons"></i> Facebook </a>
	        				<a href='#' class="btn btn-default twitter"> <i class="fa fa-twitter modal-icons"></i> Twitter </a>
	        				<a href='#' class="btn btn-default google"> <i class="fa fa-google-plus modal-icons"></i> Google </a>
	        				<a href='#' class="btn btn-default linkedin"> <i class="fa fa-linkedin modal-icons"></i> Linkedin </a>
	        			</div>
	        		</div>
	        	</div>
        		<div class="clearfix"></div>

        		<div class="form-group modal-register-btn">
        			<button class="btn btn-default"> New User? Register</button>
        		</div>
      		</div>
      		<div class="clearfix"></div>
      		<div class="modal-footer login_modal_footer">
      		</div>
    	</div>
  	</div>
</div>
