<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Eventure">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Eventure</title>
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="favicon.ico" type="image/gif" sizes="16x16">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,700;1,600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/271c8d4e8a.js" crossorigin="anonymous"></script>
    <script src=
"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
    </script><link rel="stylesheet" href="loader.css">
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
  
  <h2 class="title">All Events</h2>
  <!-- Navbar end -->

  <!-- Displaying Products Start -->
  <div class="container" class="small-container">
    <div id="message"></div>
    <div class="row mt-2 pb-3">
      <?php
  			include 'config.php';
  			$stmt = $conn->prepare('SELECT * FROM product');
  			$stmt->execute();
  			$result = $stmt->get_result();
  			while ($row = $result->fetch_assoc()):
  		?>
     
        
       <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
     <div class="card-deck">
          <div class="card p-2 border-secondary mb-2">
      
      
      
      
        
         
            <img align="center" src="<?= $row['product_image'] ?>" class="card-img-top" height="250">
            
            <div class="card-footer p-1">
            
              <h4 class="card-title text-center text-info"><?= $row['product_name'] ?></h4>
              <h5 class="card-text text-center text-danger"><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($row['product_price'],2) ?>/-</h5>

            
              <form action="" class="form-submit">
                <div class=" p-2"><br>
                  <div class="col-md-6 py-1 pl-4 text-center">
                    Quantity
                  </div>
                  <div >
                    <input type="number" class="form-control pqty" value="<?= $row['product_qty'] ?>">
                  </div>
                </div>
                <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                <input type="hidden" class="pname" value="<?= $row['product_name'] ?>">
                <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                <input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">
                <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">
                <button class="btn  btn-block addItemBtn"><i class="fas fa-ticket-alt"></i>&nbsp;&nbsp;Add to cart</button>
              </form>
            </div>
          </div>
        </div> 
      </div>
      <?php endwhile; ?>
    </div>
  </div>
  </div>
        </div</div></div>
        </div></div></div>
        </div></div</div></div>
        </div></div></div>
        </div>
  <!-- Displaying Products End -->
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

    // Send product details in the server
    $(".addItemBtn").click(function(e) {
      e.preventDefault();
      var $form = $(this).closest(".form-submit");
      var pid = $form.find(".pid").val();
      var pname = $form.find(".pname").val();
      var pprice = $form.find(".pprice").val();
      var pimage = $form.find(".pimage").val();
      var pcode = $form.find(".pcode").val();

      var pqty = $form.find(".pqty").val();

      $.ajax({
        url: 'action.php',
        method: 'post',
        data: {
          pid: pid,
          pname: pname,
          pprice: pprice,
          pqty: pqty,
          pimage: pimage,
          pcode: pcode
        },
        success: function(response) {
          $("#message").html(response);
          window.scrollTo(0, 0);
          load_cart_item_number();
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
