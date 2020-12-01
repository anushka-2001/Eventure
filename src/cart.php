<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Eventure">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Cart</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="favicon.ico" type="image/gif" sizes="16x16">
  <link rel="icon" href="favicon.ico" type="image/gif" sizes="16x16">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,700;1,600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/271c8d4e8a.js" crossorigin="anonymous"></script>
    <script src=
"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js">
    </script>
    <link rel="stylesheet" href="loader.css">
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
  
	<div class="navbar">
		
  <nav >
   
    <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar"> -->
      <ul id="MenuItems">
        
        <li >
          <a class="nav-link" href="checkout.php"><i class="fas fa-money-check-alt mr-2"></i>Checkout</a>
        </li>
        <li >
          <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i> <span id="cart-item" class="badge "></span></a>
        </li>
      </ul>
    
  </nav>
  </div>
  
</div>


  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div style="display:<?php if (isset($_SESSION['showAlert'])) {
  echo $_SESSION['showAlert'];
} else {
  echo 'none';
} unset($_SESSION['showAlert']); ?>" class="alert alert-success alert-dismissible mt-3">
          <button type="button" class="close" data-dismiss="alert"></button>
          <strong><?php if (isset($_SESSION['message'])) {
  echo $_SESSION['message'];
} unset($_SESSION['showAlert']); ?></strong>
        </div>
        <div class="table-responsive mt-2">
          <table class="table table-bordered table-striped text-center">
            <thead>
              <tr>
                <td colspan="7">
                  <h4 class="text-center text-info m-0">Events in your cart!</h4>
                </td>
              </tr>
              <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Event</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total Price</th>
                <th>
                  <a href="action.php?clear=all" class=" badge p-1" onclick="return confirm('Are you sure want to clear your cart?');"><i class="fas fa-trash"></i>&nbsp;&nbsp;Clear Cart</a>
                </th>
              </tr>
            </thead>
            <tbody>
              <?php
                require 'config.php';
                $stmt = $conn->prepare('SELECT * FROM cart');
                $stmt->execute();
                $result = $stmt->get_result();
                $grand_total = 0;
                while ($row = $result->fetch_assoc()):
              ?>
              <tr>
                <td><?= $row['id'] ?></td>
                <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                <td><img src="<?= $row['product_image'] ?>" width="50"></td>
                <td><?= $row['product_name'] ?></td>
                <td>
                  
                  <i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($row['product_price'],2); ?>
                </td>
                <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                <td>
                  <input type="number" class="form-control itemQty" value="<?= $row['qty'] ?>" style="width:75px;">
                </td>
                <td><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($row['total_price'],2); ?></td>
                <td>
                  <a href="action.php?remove=<?= $row['id'] ?>" class="text-danger lead" onclick="return confirm('Are you sure want to remove this Event?');"><i class="fas fa-trash-alt"></i></a>
                </td>
              </tr>
              <?php $grand_total += $row['total_price']; ?>
              <?php endwhile; ?>
              <tr>
                <td colspan="3">
                  <a href="index.php" class="btn btn-success"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Continue
                    Shopping</a>
                </td>
                <td colspan="2"><b>Grand Total</b></td>
                <td><b><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($grand_total,2); ?></b></td>
                <td>
                  <a href="checkout.php" class="btn btn-info <?= ($grand_total > 1) ? '' : 'disabled'; ?>"><i class="far fa-credit-card"></i>&nbsp;&nbsp;Checkout</a>
                </td>
              </tr>
            </tbody>
          </table>
          <br><br><br><br>
        </div>
      </div>
    </div>
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
<script >
    $(window).on("load",function(){
			$(".loader-wrapper").fadeOut("slow");});</script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
  $(document).ready(function() {

    // Change the item quantity
    $(".itemQty").on('change', function() {
      var $el = $(this).closest('tr');

      var pid = $el.find(".pid").val();
      var pprice = $el.find(".pprice").val();
      var qty = $el.find(".itemQty").val();
      location.reload(true);
      $.ajax({
        url: 'action.php',
        method: 'post',
        cache: false,
        data: {
          qty: qty,
          pid: pid,
          pprice: pprice
        },
        success: function(response) {
          console.log(response);
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
