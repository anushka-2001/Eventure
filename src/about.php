<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Eventure-About</title>
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,700;1,600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/271c8d4e8a.js" crossorigin="anonymous"></script>
		<link rel="icon" href="favicon.ico" type="image/gif" sizes="16x16">
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
			<img src="images/menu.png" class="menu-icon"
			onclick="menutoggle()">
	</div>
	<div class="row">
		<div class="col-2">
            		<h2 class="title">About us</h2>
            <p align="justify"><b>Welcome to Eventure.</b><br>
Eventure is a Cloud based College Event Technology Platform. All in one integrated software that helps the College event organisers from planning to execution.<br>
The platforms help the organisers in Online ticketing and Registration, Marketing and promotion, entry management, analytics and to build students Community.<br>
Eventure in the past 5 years has helped events of various colleges(IIT’s, NIT's, IIM's etc) with their event ticketing. With a wide range of solutions, Eventure has partnered with 2100+ colleges across India. Eventure is also recognized as "Start Up" by Ministry of Commerce and Industry, Government of India.<br>
Eventure is backed by 11.2 Advisors Pvt Ltd. driven by a group of seasoned corporate executives and proven entrepreneurs. With a wide range of solutions, eventure has partnered with 2100+ colleges across India.</p><br>
		</div>
		</div>
	</div>
	</div>
	
 <!---Our Mission-->
    <div class="row">
    <div class="col-2"><h2 class="title">Our Mission</h2>
    <p align="justify">To reach out to millions of students and provide them a space to explore their talents and flourish during their studentship. And to work for a robust and a well connected society through collective efforts.</p><br>
    
    <!---Our Vision-->
    <h2 class="title">Our Vision</h2>
        <p align="justify">Building the largest Global Student Community and to bridge a nurturing connectivity among the student community round the world.</p><br></div></div>

	<! -------- featured events ------>
	<h2 class="title">Meet our Team</h2>	
	<div class="testimonial"><div class="container">
		<div class="small-container">
		
			<div class="row">
				<div class="col-3">
				<i class="fa fa-quote-left"></i>
				<p> Great Event Organizers</p>
				<div class="rating">
                </div>
				<img src="images/anuformal.png">
				<h3>Anushka Bhagchandani</h3>
			</div>
			<div class="col-3">
			<i class="fa fa-quote-left"></i>
				<p> Great Event Organizers</p>
				<div class="rating">
				</div>
				<img src="images/chaitya.png">
				<h3>Chaitya Vohera</h3>
			</div>
			<div class="col-3">
			<i class="fa fa-quote-left"></i>
				<p> Great Event Organizers</p>
				<div class="rating">
				</div>
				<img src="images/heet.jpg">
				<h3>Heet Chheda</h3>
			</div>
		</div>
	</div>
</div>

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
	</div>
	<!--footer-->
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
</div>
	
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