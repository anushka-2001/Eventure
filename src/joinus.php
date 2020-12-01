<?php
//index.php

$error = '';
$name = '';
$email = '';
$subject = '';
$mobile = '';
$message = '';

function clean_text($string)
{
 $string = trim($string);
 $string = stripslashes($string);
 $string = htmlspecialchars($string);
 return $string;
}

if(isset($_POST["submit"]))
{
 if(empty($_POST["name"]))
 {
  $error .= '<p><label class="text-danger">Please Enter your Name</label></p>';
 }
 else
 {
  $name = clean_text($_POST["name"]);
  if(!preg_match("/^[a-zA-Z ]*$/",$name))
  {
   $error .= '<p><label class="text-danger">Only letters and white space allowed</label></p>';
  }
 }
 if(empty($_POST["email"]))
 {
  $error .= '<p><label class="text-danger">Please Enter your Email</label></p>';
 }
 else
 {
  $email = clean_text($_POST["email"]);
  if(!filter_var($email, FILTER_VALIDATE_EMAIL))
  {
   $error .= '<p><label class="text-danger">Invalid email format</label></p>';
  }
 }
 if(empty($_POST["subject"]))
 {
  $error .= '<p><label class="text-danger">Subject is required</label></p>';
 }
 else
 {
  $subject = clean_text($_POST["subject"]);
 }

if(empty($_POST["mobile"]))
 {
  $error .= '<p><label class="text-danger">Mobile is required</label></p>';
 }
 else
 {
  $mobile = clean_text($_POST["mobile"]);
 }

 if(empty($_POST["message"]))
 {
  $error .= '<p><label class="text-danger">Message is required</label></p>';
 }
 else
 {
  $message = clean_text($_POST["message"]);
 }

 if($error == '')
 {

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "members";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO data (name, email, mobile, message, subject)
VALUES ('$name', '$email', '$mobile', '$message', '$subject')";

if (mysqli_query($conn, $sql)) {
//   echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

  $error = '<label class="text-success alert alert-primary">Registration Form Submitted! </label>';
  $name = '';
  $email = '';
  $subject = '';
  $mobile = '';
  $message = '';
 }
}

?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Eventure | Join Us</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="loader.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,700;1,600&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/271c8d4e8a.js" crossorigin="anonymous"></script>
<link rel="icon" href="favicon.ico" type="image/gif" sizes="16x16">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

<!-- Icons font CSS-->
<link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
<link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
<!-- Font special for pages-->
<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
<!-- Vendor CSS-->
<link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
<link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

<!-- Main CSS-->
<link href="css/main.css" rel="stylesheet" media="all">

<link rel="icon" href="favicon.ico" type="image/gif" sizes="16x16">

</head>
<body>

<div class="header">
<div class="container">
<div class="navbar">
<div class="logo">
<a href="http://localhost/Events/index.php">
<img src="images/logoo.png" width="125px">
</a>
</div>
<nav>
<ul id="MenuItems">
<li><a href="http://localhost/Events/index.php">Home</a></li>
<li><a href="http://localhost/Events/event.php">Events</a></li>
<li><a href= "http://localhost/Events/about.php">About</a></li>
<li><a href="form.php">Contact</a></li>
<li><a href="http://localhost/Events/joinus.php">Join Us</a></li>
</ul>
</nav>
<img src="images/menu.png" class="menu-icon"
onclick="menutoggle()">
</div>
</div>
<div class="section animated bounceInLeft">
<div class="page-wrapper  p-t-130 p-b-100 font-poppins">
<div class="wrapper wrapper--w680">
<div class="card card-4">
<div class="card-body">
   <h2  class="title"> User Registeration</h2>
   <br />
   <div class="col-md-6" style="margin:0 auto; float:none;">
    <form method="post">
     <br />
     <?php if(!empty($error)) {
         echo '<div class="alert alert-success" role="alert">'.$error.'</div>';
     }
     ?>
     <br>
     
     <div class="form-group">
      <label>Enter Name</label>
      <input type="text" name="name" placeholder="" class="form-control1" value="<?php echo $name; ?>" />
     </div>
     <div class="form-group">
      <label>Enter Email</label>
      <input type="text" name="email" class="form-control1" placeholder="" value="<?php echo $email; ?>" />
     </div>
     <div class="form-group">
      <label>Enter Subject</label>
      <input type="text" name="subject" class="form-control1" placeholder="" value="<?php echo $subject; ?>" />
     </div>
     <div class="form-group">
      <label>Enter Mobile</label>
      <input type="text" name="mobile" class="form-control1" placeholder="" value="<?php echo $mobile; ?>" />
     </div>
     <div class="form-group">
      <label>Enter Message</label>
      <textarea name="message" class="form-control1" placeholder=""><?php echo $message; ?></textarea>
     </div>
     <div class="form-group" align="center">
      <input type="submit" name="submit" class="btn btn-info" value="Submit" />
     </div>
    </form>
   </div>
  </div>
</div>
</div>
<div>
</div>
<div>
</div>
</div>
<br>


    
    <script >
    $(window).on("load",function(){
			$(".loader-wrapper").fadeOut("slow");});</script>
  <!-- Jquery JS-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <!-- Vendor JS-->
  <script src="vendor/select2/select2.min.js"></script>
  <script src="vendor/datepicker/moment.min.js"></script>
  <script src="vendor/datepicker/daterangepicker.js"></script>

  <!-- Main JS-->
  <script src="js/global.js"></script>



  <!------------ BRANDS -------->
  <div class="brands">
  <div class="small-container">
  <div class="row">
  <div class="col-5">
  <img src="images/redbull.png">
  </div>
  <div class="col-5">
  <img src="images/logo-oppo.png">
  </div>
  <div class="col-5">
  <img src="images/atkt.png">
  </div>
  <div class="col-5">
  <img src="images/logo-coca-cola.png">
  </div>
  <div class="col-5">
  <img src="images/burger.png">
  </div>
  </div>
  </div>
  </div>

  <!------------ Footer -------->
  <div class="footer">
		<div class="container">
				<div class="row">
					<div class="footer-col-1">
												<img src="images/logo-white.png">
						<p>Our Purpose Is To Sustainably Make The Pleasure and Benefits of Events Accessible to the Many.</p>
					</div>
					<div class="footer-col-3">
						<h3>Useful Links</h3>
						<ul>
							
							<li><a href=form.php target="blank">Contact</a></li>
							<li><a href="privacy.html" target="blank">Privacy Policy</a></li>
							<li><a href="joinus.php">Join Us</a></li>
						</ul>
					</div>
					<div class="footer-col-4">
						<h3>Follow Us</h3>
						<ul>
           <li><a href="https://www.facebook.com/groups/723692128357197" target="blank">Facebook</a></li>
            <li><a href="https://twitter.com/Eventur18620875" target ="blank">Twitter</a></li>
            <li><a href="https://www.instagram.com/Eventure_college_Events/Instagram" target="blank">Instagram</a></li>
            <li><a href="https://www.youtube.com/channel/UCTv_4QWepo4uums3ic0-BTQ/?guided_help_flow=5" target="blank">YouTube</a></li>
						</ul>
					</div>
				</div>
				<hr>
				<p class="copyright">Copyright 2020 - The Eventure <i class="far fa-copyright"></i> </p>
			</div>
		</div>
  <div class="loader-wrapper">
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  
  

<img  class='body' src="images/logoo.png" width="125px">
<div class='longfazers'>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
</div>
<br>


    
    <script >
    $(window).on("load",function(){
			$(".loader-wrapper").fadeOut("slow");});</script>

  <!------------ js for toggle menu -------->
  <script>
  var MenuItems = document.getElementById("MenuItems");
  MenuItems.style.maxHeight= "0px";

  function menutoggle(){
  if (MenuItems.style.maxHeight == "0px")
  {
  MenuItems.style.maxHeight= "200px";
  }
  else
  {
  MenuItems.style.maxHeight= "0px";
  }
  }
  </script>
  </body>
  </html>
