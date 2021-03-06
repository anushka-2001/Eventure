<?php
//index.php

$error = '';
$name = '';
$email = '';
$mostLiket = '';
$experince = '';
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
 if(empty($_POST["experience"]))
 {
  $error .= '<p><label class="text-danger">Subject is required</label></p>';
 }
 else
 {
  $experince = clean_text($_POST["experience"]);
 }

if(empty($_POST["mostLike"]))
 {
  $error .= '<p><label class="text-danger">Mobile is required</label></p>';
 }
 else
 {
  $mostLike = clean_text($_POST["mostLike"]);
 }

 if(empty($_POST["comment"]))
 {
  $error .= '<p><label class="text-danger">Message is required</label></p>';
 }
 else
 {
  $comment = clean_text($_POST["comment"]);
 }

 if($error == '')
 {

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO contact (name, email, mostLike, experience, comment)
VALUES ('$name', '$email', '$mostLike', '$experince', '$comment')";

if (mysqli_query($conn, $sql)) {
//   echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

  $error = '<label class="text-success">Form Submitted. We Will Get Back To You Soon!!</label>';
  $name = '';
  $email = '';
  $mostLike = '';
  $experince = '';
  $comment = '';
 }
}

?>
<!DOCTYPE html>
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,700;1,600&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/271c8d4e8a.js" crossorigin="anonymous"></script>
<link rel="icon" href="favicon.ico" type="image/gif" sizes="16x16">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
<!-- Icons font CSS-->

<!-- Font special for pages-->


<!-- Vendor CSS-->
<link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
<link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

<!-- Main CSS-->
<link href="css/main.css" rel="stylesheet" media="all">

<link rel="icon" href="favicon.ico" type="image/gif" sizes="16x16">

  <link rel="stylesheet" href="loader.css">
</head>
<body>
  
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
				<li><a href="http://localhost/Events/Event.php">Events</a></li>
				<li><a href= "http://localhost/Events/about.php">About</a></li>
				<li><a href="form.php">Contact</a></li>
				<li><a href="http://localhost/Events/joinus.php">Join Us</a></li>
			</ul>
		</nav>
			<img src="images/menu.png" class="menu-icon"
			onclick="menutoggle()">
	
     
     </div>
     </div>
     
<!-- partial:index.partial.html -->
<div class="container  small-container">
  	<div class="row">
<div class="col-2">
			<i><p class="text-center">Thank you for contacting us!<br></p></i>
			<br>
		
		
		</div>
		<div class="col-2" class="text-center">
  <svg width="500" height="631" viewBox="0 0 888 631" fill="none" xmlns="http://www.w3.org/2000/svg">
<g id="undraw_personal_opinions_g3kr 1" clip-path="url(#clip0)">
<g id="rest">
<path id="Vector" d="M115.088 582.43L112.818 573.476C108.793 571.77 104.675 570.292 100.483 569.05L100.197 573.212L99.0343 568.627C93.836 567.143 90.2996 566.489 90.2996 566.489C90.2996 566.489 95.0764 584.654 105.096 598.541L116.77 600.592L107.7 601.9C108.961 603.416 110.316 604.852 111.757 606.199C126.332 619.728 142.566 625.935 148.017 620.063C153.467 614.191 146.07 598.464 131.495 584.935C126.756 580.741 121.402 577.298 115.619 574.726L115.088 582.43Z" fill="#E6E6E6"/>
<path id="Vector_2" d="M136.679 572.706L139.364 563.868C136.8 560.327 134.038 556.933 131.092 553.703L128.695 557.117L130.07 552.592C126.387 548.635 123.698 546.247 123.698 546.247C123.698 546.247 118.398 564.266 119.796 581.333L128.73 589.123L120.29 585.555C120.586 587.505 121.003 589.434 121.541 591.332C127.025 610.447 137.713 624.152 145.414 621.942C153.115 619.733 154.913 602.446 149.429 583.331C147.54 577.291 144.736 571.576 141.115 566.386L136.679 572.706Z" fill="#E6E6E6"/>
<path id="Vector_3" d="M298.974 580.254L296.84 571.839C293.057 570.236 289.186 568.847 285.247 567.68L284.977 571.591L283.885 567.282C278.999 565.887 275.675 565.272 275.675 565.272C275.675 565.272 280.165 582.345 289.582 595.398L300.554 597.325L292.03 598.554C293.215 599.98 294.489 601.329 295.843 602.595C309.542 615.311 324.8 621.144 329.923 615.625C335.046 610.106 328.093 595.325 314.394 582.609C309.94 578.667 304.908 575.431 299.473 573.014L298.974 580.254Z" fill="#E6E6E6"/>
<path id="Vector_4" d="M319.266 571.115L321.79 562.809C319.38 559.48 316.784 556.291 314.015 553.255L311.763 556.464L313.055 552.211C309.594 548.491 307.066 546.247 307.066 546.247C307.066 546.247 302.084 563.183 303.399 579.224L311.796 586.546L303.863 583.192C304.141 585.024 304.533 586.838 305.038 588.622C310.193 606.588 320.239 619.469 327.477 617.392C334.715 615.316 336.404 599.068 331.25 581.102C329.474 575.425 326.839 570.054 323.436 565.175L319.266 571.115Z" fill="#E6E6E6"/>
<path id="Vector_5" d="M657.35 584.787L656.275 580.547C654.368 579.739 652.418 579.039 650.433 578.451L650.297 580.422L649.746 578.25C647.284 577.547 645.609 577.238 645.609 577.238C647.124 582.638 649.489 587.763 652.617 592.418L658.146 593.39L653.851 594.009C654.448 594.727 655.09 595.407 655.772 596.045C662.675 602.453 670.364 605.393 672.945 602.611C675.527 599.83 672.024 592.381 665.12 585.974C662.876 583.988 660.34 582.357 657.601 581.139L657.35 584.787Z" fill="#E6E6E6"/>
<path id="Vector_6" d="M667.576 580.182L668.847 575.996C667.633 574.319 666.325 572.712 664.929 571.182L663.795 572.799L664.446 570.656C662.701 568.781 661.428 567.65 661.428 567.65C659.933 573.056 659.309 578.666 659.58 584.268L663.811 587.958L659.814 586.267C659.954 587.191 660.151 588.105 660.406 589.004C663.003 598.057 668.066 604.548 671.713 603.502C675.36 602.455 676.212 594.268 673.614 585.214C672.72 582.354 671.392 579.647 669.677 577.189L667.576 580.182Z" fill="#E6E6E6"/>
<path id="Vector_7" d="M750.005 577.461L748.591 571.883C746.083 570.821 743.518 569.9 740.906 569.126L740.728 571.719L740.004 568.863C736.765 567.938 734.562 567.531 734.562 567.531C734.562 567.531 737.538 578.847 743.78 587.498L751.053 588.776L745.403 589.591C746.188 590.535 747.032 591.43 747.93 592.269C757.01 600.697 767.123 604.564 770.518 600.906C773.914 597.248 769.306 587.45 760.226 579.022C757.273 576.409 753.938 574.264 750.336 572.662L750.005 577.461Z" fill="#E6E6E6"/>
<path id="Vector_8" d="M763.455 571.404L765.128 565.898C763.53 563.692 761.81 561.578 759.975 559.566L758.482 561.693L759.338 558.874C757.044 556.408 755.369 554.921 755.369 554.921C755.369 554.921 752.067 566.146 752.938 576.778L758.503 581.631L753.246 579.408C753.43 580.623 753.69 581.825 754.025 583.007C757.441 594.915 764.1 603.453 768.897 602.077C773.694 600.7 774.814 589.931 771.398 578.023C770.221 574.26 768.474 570.7 766.219 567.467L763.455 571.404Z" fill="#E6E6E6"/>
<path id="Vector_9" d="M574.21 555.235L580.635 547.786C579.665 543.233 578.439 538.738 576.963 534.322L573.158 536.613L576.447 532.8C574.567 527.358 572.978 523.874 572.978 523.874C572.978 523.874 560.048 539.135 554.052 556.357L559.392 567.794L552.713 560.68C552.159 562.707 551.734 564.766 551.439 566.845C548.538 587.823 553.037 605.776 561.489 606.945C569.94 608.114 579.143 592.056 582.045 571.078C582.809 564.382 582.543 557.608 581.255 550.993L574.21 555.235Z" fill="#E6E6E6"/>
<g id="Group 1">
<path id="Vector_10" d="M595.879 568.132L605.229 565.077C606.752 560.677 608.026 556.196 609.045 551.653L604.603 551.647L609.39 550.083C610.594 544.453 611.035 540.649 611.035 540.649C611.035 540.649 592.078 547.029 578.042 558.672L576.702 571.224L574.661 561.681C573.14 563.13 571.712 564.673 570.385 566.301C557.058 582.759 551.629 600.453 558.26 605.822C564.89 611.192 581.069 602.202 594.396 585.744C598.512 580.407 601.785 574.471 604.102 568.142L595.879 568.132Z" fill="#E6E6E6"/>
<path id="Vector_11" d="M682.523 584.831L685.381 581.519C684.949 579.494 684.404 577.494 683.747 575.531L682.055 576.55L683.518 574.854C682.682 572.433 681.975 570.884 681.975 570.884C678.419 575.221 675.578 580.098 673.558 585.33L675.933 590.417L672.962 587.253C672.716 588.154 672.527 589.07 672.396 589.995C671.106 599.325 673.107 607.31 676.865 607.829C680.624 608.349 684.717 601.207 686.007 591.878C686.348 588.9 686.229 585.887 685.656 582.945L682.523 584.831Z" fill="#E6E6E6"/>
<path id="Vector_12" d="M692.16 590.567L696.319 589.209C696.996 587.252 697.563 585.259 698.016 583.238L696.04 583.236L698.169 582.54C698.705 580.036 698.901 578.344 698.901 578.344C693.615 580.22 688.661 582.926 684.227 586.36L683.631 591.943L682.724 587.698C682.047 588.343 681.412 589.029 680.822 589.753C674.894 597.073 672.48 604.942 675.429 607.33C678.378 609.718 685.574 605.72 691.501 598.4C693.331 596.027 694.787 593.387 695.817 590.572L692.16 590.567Z" fill="#E6E6E6"/>
<path id="Vector_13" d="M0.534546 630.595C0.534546 630.595 699.034 558.595 887.034 630.595H0.534546Z" fill="#E6E6E6"/>
<path id="Vector_14" d="M887.035 191.294C885.666 85.2736 831.579 -7.62939e-06 765.051 -7.62939e-06C725.07 -7.62939e-06 689.582 30.7962 667.327 78.3834L693.492 144.034L657.332 103.569C648.211 130.949 643.035 162.209 643.035 195.409C642.961 220.575 646.059 245.649 652.258 270.039L722.379 258.735L659.625 293.825C680.069 349.875 717.437 388.156 760.508 390.682L752.207 616.503L777.895 617.42L772.404 390.455C833.737 384.615 882.868 306.226 886.803 208.124L844.419 184.424L887.035 191.294Z" fill="#E6E6E6"/>
<path id="Vector_15" d="M442.83 184.86L476.584 190.797L487.836 134.4L460.645 122.527L442.83 184.86Z" fill="#2F2E41"/>
<path id="Vector_16" d="M483.418 193.88L517.172 199.816L528.423 143.42L501.233 131.547L483.418 193.88Z" fill="#2F2E41"/>
<path id="Vector_17" d="M523.631 556.815V580.265H540.768L538.964 557.717L523.631 556.815Z" fill="#A0616A"/>
<path id="Vector_18" d="M434.338 556.815V580.265H417.201L419.005 557.717L434.338 556.815Z" fill="#A0616A"/>
<path id="Vector_19" d="M440.652 339.445L426.95 422.964C423.461 444.229 421.354 465.697 420.642 487.235L418.103 564.03L436.142 562.226L449.671 474.737C449.671 474.737 484.847 344.857 497.474 371.014C510.102 397.17 516.415 480.149 516.415 480.149L521.827 561.324H541.67L543.474 454.895C543.474 454.895 554.297 306.073 527.239 293.446L440.652 339.445Z" fill="#2F2E41"/>
<path id="Vector_20" d="M542.572 576.657C542.572 576.657 522.729 563.128 520.925 573.952L513.709 600.108C513.709 600.108 502.886 620.853 526.337 620.853C549.787 620.853 542.572 605.52 542.572 605.52V576.657Z" fill="#2F2E41"/>
<path id="Vector_21" d="M415.397 576.657C415.397 576.657 435.24 563.128 437.044 573.952L444.26 600.108C444.26 600.108 455.083 620.853 431.632 620.853C408.182 620.853 415.397 605.52 415.397 605.52V576.657Z" fill="#2F2E41"/>
<path id="Vector_22" d="M490.71 173.036C505.156 173.036 516.866 161.325 516.866 146.88C516.866 132.434 505.156 120.723 490.71 120.723C476.264 120.723 464.553 132.434 464.553 146.88C464.553 161.325 476.264 173.036 490.71 173.036Z" fill="#A0616A"/>
<path id="Vector_23" d="M474.024 158.154C474.024 158.154 476.73 183.409 463.2 188.82L485.749 215.879L515.513 195.134C515.513 195.134 493.867 190.624 497.474 177.997C501.082 165.37 501.082 163.566 501.082 163.566L474.024 158.154Z" fill="#A0616A"/>
<path id="Vector_24" d="M468.161 185.663C468.161 185.663 487.102 200.095 490.71 199.193C494.318 198.291 501.533 188.369 501.533 188.369C501.533 188.369 528.141 188.82 538.964 196.036C549.787 203.251 528.592 247.898 528.592 247.898C528.592 247.898 534.454 268.192 527.239 273.603C520.023 279.015 529.043 292.544 529.043 292.544C529.043 292.544 511.004 325.916 463.2 338.543C463.2 338.543 433.436 350.269 434.338 343.955C435.24 337.641 444.26 265.486 444.26 265.486V190.624L468.161 185.663Z" fill="#575A89"/>
<path id="Vector_25" d="M468.146 115.787C468.146 115.787 454.486 120.341 453.793 138.322C453.722 141.198 454.041 144.07 454.741 146.861C455.51 150.12 456.004 157.134 450.044 166.3C446.052 172.351 442.406 178.623 439.122 185.086L439.08 185.171L454.082 187.046L457.271 162.18C458.818 150.124 462.131 138.361 467.104 127.27L467.208 127.039C467.208 127.039 473.772 139.228 486.898 139.228L482.21 134.54C482.21 134.54 502.838 142.978 510.339 142.978C510.339 142.978 515.964 146.729 510.339 152.354C504.713 157.98 493.462 171.107 500.025 181.421C506.588 191.734 500.963 194.547 500.963 194.547L511.276 188.922L515.964 186.109V189.859L540.342 187.046C540.342 187.046 546.906 186.109 532.841 170.169C532.841 170.169 529.128 163.979 530.752 158.641C532.088 154.583 532.438 150.267 531.776 146.047C528.625 128.47 516.263 93.524 468.146 115.787Z" fill="#2F2E41"/>
<path id="Vector_26" d="M425.319 262.78L428.025 282.623L447.867 337.641C447.867 337.641 452.377 380.033 463.2 374.621C474.024 369.21 461.397 331.328 461.397 331.328L445.162 279.917L446.064 261.878L425.319 262.78Z" fill="#A0616A"/>
<path id="Vector_27" d="M455.083 192.428L446.948 189.775L443.358 191.526C443.358 191.526 430.73 192.428 428.926 201.447C427.123 210.467 420.809 266.388 420.809 266.388L454.181 268.192L455.083 192.428Z" fill="#575A89"/>
<path id="Vector_28" d="M545.729 262.78L543.023 282.623L523.18 337.641C523.18 337.641 518.67 380.033 507.847 374.621C497.023 369.21 509.651 331.328 509.651 331.328L525.886 279.917L524.984 261.878L545.729 262.78Z" fill="#A0616A"/>
<path id="Vector_29" d="M515.964 192.428L520.302 191.014C522.738 190.219 525.387 190.403 527.69 191.526V191.526C527.69 191.526 540.317 192.428 542.121 201.447C543.925 210.467 550.238 266.388 550.238 266.388L516.866 268.192L515.964 192.428Z" fill="#575A89"/>
</g>
</g>
<g id="feedback">
<path id="Vector_30" d="M365.556 341.7H611.035V477.762H579.854V515.179L546.263 477.762H365.556V341.7Z" fill="#0D7377"/>
<path id="Vector_31" d="M405.807 389.039H570.783V381.668H405.807V389.039Z" fill="white"/>
<path id="Vector_32" d="M405.807 413.416H570.783V406.046H405.807V413.416Z" fill="white"/>
<path id="Vector_33" d="M405.807 437.794H570.783V430.424H405.807V437.794Z" fill="white"/>
<path id="Vector_34" d="M332.9 17.333H0V201.851H42.285V252.593L87.838 201.851H332.9V17.333Z" fill="#0D7377"/>
<path id="Vector_35" d="M278.314 71.5354H54.5864V81.5301H278.314V71.5354Z" fill="white"/>
<path id="Vector_36" d="M278.314 104.595H54.5864V114.589H278.314V104.595Z" fill="white"/>
<path id="Vector_37" d="M278.314 137.654H54.5864V147.649H278.314V137.654Z" fill="white"/>
</g>
</g>
<defs>
<clipPath id="clip0">
<rect width="887.035" height="630.595" fill="white"/>
</clipPath>
</defs>
</svg>
</div>

    </div>
<div class="page-wrapper  p-t-130 p-b-100 font-poppins">
<div class="wrapper wrapper--w680 section animated bounceInLeft">
<div class="card card-4">
<div class="card-body">
   <h2 align="center" class="title">Contact Us</h2>
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
     <div class="form-group "  align="left" >
       <p>How has your experience been with us?</p>
         <input type="radio" name="experience" value="Good" value=" <?php echo $experince; ?>">Good
         <input type="radio" name="experience" value="Can Be Better" value="<?php echo $experience; ?>" >Can Be Better
         <input type="radio" name="experience" value="Great" value="<?php echo $experince; ?>">Great
     </div>

     <div class="form-group">
       <p>Since how long have you been using our platform?</p>
       <select id="most" name="mostLike" class="form-control1" value="<?php echo $mostLike; ?>">
         <option disabled selected value>Select an option</option>
         <option value="One Week">One week</option>
         <option value="Two Week">Two week</option>
         <option value="Less Than A Week">Less than a week</option>
         <option value="Never Used Before">Never used before</option>
       </select>
     </div>
     <div class="form-group">
      <label>Any other feedback?</label>
      <textarea name="comment" class="form-control1" placeholder=""><?php echo $message; ?></textarea>
     </div>
     <div class="form-group" align="center">
      <input type="submit" name="submit" class="btn btn-info" value="Submit" />
     </div>
    </form>
   </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
<br><br>
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
    </div</div>
    
<!------------ js for toggle menu -------->

<script src="https://www.gstatic.com/firebasejs/8.0.2/firebase-app.js"></script> 
<script src="https://www.gstatic.com/firebasejs/8.0.2/firebase-database.js"></script>

<script src ="form.js"></script>
<script >
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
