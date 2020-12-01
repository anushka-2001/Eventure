<?php
	require 'config.php';

	$grand_total = 0;
	$allItems = '';
	$items = [];

	$sql = "SELECT CONCAT(product_name, '(',qty,')') AS ItemQty, total_price FROM cart";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$result = $stmt->get_result();
	while ($row = $result->fetch_assoc()) {
	  $grand_total += $row['total_price'];
	  $items[] = $row['ItemQty'];
	}
	$allItems = implode(', ', $items);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Eventure">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Checkout</title>
  <link rel="icon" href="favicon.ico" type="image/gif" sizes="16x16">
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="favicon.ico" type="image/gif" sizes="16x16">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,700;1,600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/271c8d4e8a.js" crossorigin="anonymous"></script>
    <script src=
"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="loader.css">
    
</head>

<body>
  <!-- Navbar start -->
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
				<li><a href="http://localhost/Events/Event.php">Events</a></li>
				<li><a href= "http://localhost/Events/about.php">About</a></li>
				<li><a href="form.php">Contact</a></li>
				<li><a href="http://localhost/Events/joinus.php">Join Us</a></li>
			</ul>
		</nav>
		<!-- <img src="images/cart.png" width="30px" height="30px"> -->
		<!-- Dark mode
        <div class="mode">
        Dark mode:
        <span class="change">OFF</span>
    </div>
         -->

        <img src="images/menu.png" class="menu-icon"
			onclick="menutoggle()">
	</div>
  <div class="container">
	<div class="navbar">
		
  <nav >
   
    <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar"> -->
      <ul id="MenuItems">
        
        <li >
          <a class="nav-link" href="checkout.php"><i class="fas fa-money-check-alt mr-2"></i> Checkout</a>
        </li>
        <li >
          <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a>
        </li>
      </ul>
    
  </nav>
  </div>
  
</div>
</div>
  <div class="section animated bounceInLeft">
    <div class="form-group">
      
    <div class="row justify-content-center">
      <div class="col-lg-6 px-4 pb-4" id="order">
        <div class="order">
        <h2 class="text-center   ">Please Complete your order!</h2>
        <br>
        <div class="jumbotron p-3 mb-2 text-center">
          <h4 class="lead"><b>Event(s) : </b><?= $allItems; ?></h4>
          <h4 class="lead"><b>Delivery Charge : </b>Free</h4>
          <p><b>Total Amount Payable : </b><?= number_format($grand_total,2) ?>/-</p>
        </div>
</div>
<div class="page-wrapper  p-t-130 p-b-100 font-poppins">
<div class="wrapper wrapper--w680">
				<div class="card card-4">
						<div class="card-body">
        <form action="" method="post" id="placeOrder" id="contactform">
          <input type="hidden" name="products" value="<?= $allItems; ?>">
          <input type="hidden" name="grand_total" value="<?= $grand_total; ?>"> </div>
          <div class="section animated bounceInLeft">
        <br>
          <div class="form-group">
          <p >Name
            <input type="text" name="name" class="form-control1"  required></p>
         <br>
            <p >Email id
            <input type="email" name="email" class="form-control1"  required></p>
          <br>
            <p >Phone number
            <input type="tel" name="phone" class="form-control1"  required></p>
          <br>
            <p >Address
            <textarea name="address" class="form-control1" rows="3" cols="10"></textarea></p>
         <br>
          <p >Select Payment Mode
          
            <select name="pmode" class="form-control1">
              <option value="" selected disabled>-Select Payment Mode-</option>
              <option value="cod">Cash On Delivery</option>
              <option value="Card On Delivery">Card On Delivery</option>
              
            </select></p>
          <br>
          
            <input  type="submit" name="submit" value="Place Order" class="btn btn-danger ">
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<br><br>

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
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
  $(document).ready(function() {

    // Sending Form data to the server
    $("#placeOrder").submit(function(e) {
      e.preventDefault();
      $.ajax({
        url: 'action.php',
        method: 'post',
        data: $('form').serialize() + "&action=order",
        success: function(response) {
          $("#order").html(response);
        }
      });
    });

    // Load total no.of items added in the cart and display in the navbar
    load_cart_item_number();

    function load_cart_item_number() {
      $.ajax({
        url: 'action.php',
        method: 'get',
        data: {
          cartItem: "cart_item"
        },
        success: function(response) {
          $("#cart-item").html(response);
        }
      });
    }
  });
  </script>
</body>

</html>
