<?php

// connects to the database
$db_host = "localhost";	
$db_username = "root";	
$db_password = "";	
$db_name = "grand_hotel";

$db = mysqli_connect($db_host, $db_username, $db_password, $db_name);	

//Enquiries Form
if (isset($_POST['enquiry-form'])) 
{
  // receives all input values from the upcoming classes form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $surname = mysqli_real_escape_string($db, $_POST['surname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $message = mysqli_real_escape_string($db, $_POST['message']);
  
//inserts into enquiry tbl
$enquiry_form = "INSERT INTO enquiry (enquirerName,enquirerSurname, enquirerEmail, enquirerPhoneNum, enquirerMessage) VALUES('$name','$surname','$email','$phone','$message')";
mysqli_query($db, $enquiry_form);  	


//redirects user to thank you page
header('location:thank-you.html'); 	
}


/* --------------------------------------------------------------------------*/
//Login Form 
if (isset($_POST['login-form'])) 
{
  // receives all input values from the upcoming classes form
  $user = mysqli_real_escape_string($db, $_POST['email']);
  $pass = mysqli_real_escape_string($db, $_POST['password']);
  
  //inserts into login tbl
  $login_query = "SELECT * FROM guest WHERE guestEmail = '$user' AND guestPassword = '$pass'";
  mysqli_query($db, $login_query);

  //redirects user to thank you page
  //header('location: reservations.php'); 	
}

/* -------------------------------------------------------------------------*/
//Register Form 
if (isset($_POST['register-form'])) 
{
  // receives all input values from the upcoming classes form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $surname = mysqli_real_escape_string($db, $_POST['surname']);
  $id = mysqli_real_escape_string($db, $_POST['id']);
  $dob = mysqli_real_escape_string($db, $_POST['dob']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $pass = mysqli_real_escape_string($db, $_POST['password']);
  $memberSince = getdate();

  //inserts into guest
  $register_query = "INSERT INTO guest (guestName,guestSurname,guestID,guestDOB,guestPhoneNum, guestEmail,guestPassword,memberSince) VALUES('$name','$surname', '$id, '$dob','$phone','$email', '$pass', '$memberSince')";
  mysqli_query($db, $register_query);

  //redirects user to thank you page
  header('location:login.php'); 	
}


?>