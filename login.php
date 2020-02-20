﻿<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/stylesheet.css" rel="stylesheet">
    
    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
	
    <script src="js/bootstrap.min.js"></script>
	<script src="js/docs.min.js"></script>
	
	<!-- social media icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Form code -->
	<link rel="stylesheet" href="js/jquery-ui.css" />
	<script src="js/jquery-1.8.3.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script>
	  $(function() {
	    $.datepicker.setDefaults({dateFormat: 'dd-mm-yy'});
	    $( "input.date" ).datepicker();
	  });
	</script>
	
	<!-- validation -->
	<script language="javascript" src="js/jquery.validation.js"></script>
</head>

<body>
 	<!-- opens header, body and footer -->
	<div class="container">
 		
		<!-- Header -->
		<div id="top" class="row">
			
			<!-- Logo -->
			<div id="logo" class="pull-left">
			<h1>Grand Hotel</h1>
			</div>
		</div>

		<!-- Static navbar -->
		<nav class="row navbar">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li><a href="index.html">Home</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="reservations.php">Reservations</a></li>
						<li><a href="rates.html">Rates</a></li>
						<li><a href="enquiries.php">Enquiries</a></li>
						<li><a href="contact-us.html">Contact Us</a></li>
					</ul>
				</div>
		</nav>
		
		<!-- Body header -->
		<center><h1>Login</h1></center>

		
		<!-- Body content --> 
		<div id="maincontent" >
			<form action="user_process.php" method="post" id="myform"> 
				<center><div class="form-group required-field" style="width: 250px;">
					<input type="input" class="form-control" id="email" name="email" placeholder="Email">
				</div>

				<div class="form-group required-field" style="width: 250px;">	
					<input type="password" class="form-control" id="password" name="password" placeholder="Password">
				</div>
				
  				<div class="form-group">
					<input name="login-form" type="submit" value="Submit" class="btn btn-primary submit" />
				</div>
			
			<a href="register.html">No account? Register here</a></center>				
			</form>
		</div>

		<!-- break -->
		<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>


		<!-- footer -->	
		<div id="footer">
      		<small>
				&copy; Grand Hotel
				<a href="http:twitter/electronix.com" class="fa fa-facebook" title="Facebook"></a> 
				<a href="http:twitter/electronix.com" class="fa fa-twitter" title="Twitter"></a> 
				<a href="http:twitter/electronix.com" class="fa fa-instagram" title="Instagram"></a>  
      		</small>
		</div>
		
	<!-- closes header, body and footer -->
	</div>

	<!-- JavaScript slideshow -->
	<script type="text/javascript" src="js/slideshow.js"></script>
</body>
</html>