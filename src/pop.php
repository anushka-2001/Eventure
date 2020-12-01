<?php

$error = '';
$first_name = '';
$last_name = '';
$email = '';
$phone = '';
$event = '';

function clean_text($string)
{
$string = trim($string);
$string = stripslashes($string);
$string = htmlspecialchars($string);
return $string;
}

if(isset($_POST["submit"]))
{
if(empty($_POST["first_name"]))
{
$error .= '<p><label class="text-danger">Please Enter your  First Name</label></p>';
}
else
{
$first_name = clean_text($_POST["first_name"]);
if(!preg_match("/^[a-zA-Z ]*$/",$first_name))
{
$error .= '<p><label class="text-danger">Only letters and white space allowed</label></p>';
}
}
if(empty($_POST["last_name"]))
{
$error .= '<p><label class="text-danger">Please Enter your  Last Name</label></p>';
}
else
{
$last_name = clean_text($_POST["last_name"]);
if(!preg_match("/^[a-zA-Z ]*$/",$last_name))
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
if(empty($_POST["phone"]))
{
$error .= '<p><label class="text-danger">Mobile is required</label></p>';
}
else
{
$phone = clean_text($_POST["phone"]);
}

if(empty($_POST["event"]))
{
$error .= '<p><label class="text-danger">Event is required</label></p>';
}
else
{
$event = clean_text($_POST["event"]);
}

if($error == '')
{

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO data (first_name, last_name, email, phone, event)
VALUES ('$first_name', '$last_name', '$email', '$phone', '$event')";

if (mysqli_query($conn, $sql)) {
//   echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

$error = '<label class="text-success " >Registration Successfull!!! </label>';
$first_name = '';
$last_name = '';
$email= '';
$phone = '';
$event = '';
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Eventure | Join Us</title>
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,700;1,600&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/271c8d4e8a.js" crossorigin="anonymous"></script>
<link rel="icon" href="favicon.ico" type="image/gif" sizes="16x16">


<!-- Icons font CSS-->
<link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
<link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
<!-- Font special for pages-->
<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<!-- Vendor CSS-->
<link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
<link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
<!-- Main CSS-->
<link href="css/main.css" rel="stylesheet" media="all">

<link rel="icon" href="favicon.ico" type="image/gif" sizes="16x16">

</head>
<body>

<div class="header">
<div class="container">


<div class="section animated bounceInLeft">
<div class="page-wrapper  p-t-130 p-b-100 font-poppins">
<div class="wrapper wrapper--w680">
<div class="card card-4">
<div class="card-body">
<h2 class="title">Event Registration Form</h2>
<form method="POST">
<?php if(!empty($error)) {
echo '<div class="alert alert-success" role="alert">'.$error.'</div>';
}
?>
<div class="row row-space">
<div class="col-2">
<div class="form-control">
<label class="label">first name</label>
<input class="input--style-4" type="text" name="first_name" value="<?php echo $first_name; ?>" >
</div>
</div>
<div class="col-2">
<div class="form-control">
<label class="label">last name</label>
<input class="input--style-4" type="text" name="last_name" value="<?php echo $last_name; ?>" >
</div>
</div>
</div>

<div class="row row-space">
<div class="col-2">
<div class="form-control">
<label class="label">  Email</label>
<input class="input--style-4" type="text" name="email" value="<?php echo $email; ?>" >
</div>
</div>
<div class="col-2">
<div class="form-control">
<label class="label">   Phone Number</label>
<input class="input--style-4" type="text" name="phone" value="<?php echo $phone; ?>" >
</div>
</div>

<div class="row row-space">

<div class="form-control">
<label class="label"> Event name</label>
<input class="input--style-4" type="text" name="event" value="<?php echo $event; ?>" >
</div>
<br><br>
<div class="form-group" align="center">
  <br><br><br>
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
</body>
</html>
