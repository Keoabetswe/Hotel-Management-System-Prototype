﻿<!DOCTYPE html>
<html lang="en">
<head>
    <title>Enquiries</title>

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

	 <!-- Bootstrap core JavaScript -->
	 <script src="js/jquery.min.js"></script>
	 <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
	 <script src="js/bootstrap.min.js"></script>
	 <script src="js/docs.min.js"></script>

	   
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

			<!--Booking Button-->
			<div id="bookings" class="pull-right">
				<a href="reservations.php" class="btn btn-primary">Book Now</a>
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
						<li><a href="enquiries.html">Enquiries</a></li>
						<li><a href="contact-us.html">Contact Us</a></li>
					</ul>
				</div>
		</nav>
		
		<!-- Body header -->
		<center><h1>Enquiries</h1></center>

		
		<!-- Body content --> 
		<div id="maincontent" >
			<form action="user_process.php" method="post" id="myform"> 
			    <div class="form-group required-field">
					<label for="name required-field">Name *</label>
					<input type="input" class="form-control" id="name" placeholder="Name">
				</div>
				<div class="form-group required-field">
					<label for="surname">Surname *</label>
					<input type="input" class="form-control" id="surname" placeholder="Surname">
				</div>
				<div class="form-group required-field">
					<label for="email">Email *</label>
					<input type="input" class="form-control" id="email" placeholder="Email">
				</div>
				<div class="form-group">
					<label for="phone">Phone</label>
					<input type="input" class="form-control" id="phone" placeholder="Phone">
				</div>
				
				<div class="form-group required-field">
					<label for="message">Message *</label>
					<textarea class="form-control" rows="5" placeholder="Message" id="message"></textarea>
				</div>
  				<div class="form-group">
					<input name="enquiry-form" type="submit" value="Submit" class="btn btn-primary submit" />
				</div>			
			</form>
		</div>

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