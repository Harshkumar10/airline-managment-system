<?php
	include("a.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header>
		<div><h1 class="logo"><img src="https://cdn.dribbble.com/users/2761722/screenshots/7138526/image.png" height="80" width="80"/></h1></div>
		<div><h1 class="company-name">SHS Flight Booking</h1></div>
	</header>

<script>
	var g;
	var time=new Date().getHours();
	if(time<12){
		g="Good Morning";
	}
	else if(time<17)
	{
		g="Good afternoon";
	}
	else
	{
		g="Good evening";
	}
	document.write("<font color='orange'>"+g);
</script>

	<?php
		echo $_SESSION['username']; 
	?>
	
	<div class="main">
		<div><button onclick="window.location='./i.php' ">Airport</button></div>
		<div><button onclick="window.location='./v.php' ">Flight</button></div>
		<div><button onclick="window.location='./Ticket.php' ">Ticket</button></div>
		<div><button onclick="window.location='./lo.php' ">Logout</button></div>

		<div><button onclick="window.location='./Ticket1.php' ">Ticket Prices</button></div>
		<div><button onclick="window.location='./Profile.php' ">Profile</button></div>
	</div>

	<!-- <marquee  scrollamount="15" behavior="alternate">
		<img src="https://image.shutterstock.com/image-vector/concept-illustration-template-book-your-600w-1197774070.jpg" height="350" width="500" />
		<img src="https://image.shutterstock.com/image-photo/booking-flight-travel-traveler-search-600w-520314439.jpg" height="350" width="500" />
		<img src="https://image.shutterstock.com/image-illustration/air-travelling-concept-passport-boarding-600w-1154346064.jpg" height="350" width="500" />
		<img src="https://image.shutterstock.com/image-vector/landing-page-template-man-standing-600w-1419907406.jpg" height="350" width="500" />
		<img src="https://image.shutterstock.com/image-vector/smartphone-online-flight-booking-travel-600w-750729868.jpg" height="350" width="500" />
		<img src="https://image.shutterstock.com/image-photo/air-ticket-booking-on-smartphone-600w-1164143659.jpg" height="350" width="500" />
		<img src="https://image.shutterstock.com/image-photo/flight-over-new-york-city-600w-313140194.jpg" height="350" width="500"/>
		<img src="https://image.shutterstock.com/image-photo/flight-booking-ticket-icon-graphic-600w-617741123.jpg" height="350" width="500"/>
	</marquee><br><br><br> -->
	
	<h2 style="text-align:center;">Most Searched Destinations</h2>
	<div style="margin-left:150px;" >
		<a href='https://en.wikipedia.org/wiki/Gateway_of_India' class='pa'><img src="https://www.travelogyindia.com/images/mumbai/gateway-of-india-tipl-1.jpg" height="350" width="350" /></a>
		<a href='https://en.wikipedia.org/wiki/India_Gate' class='pa'><img src="https://cdn.dnaindia.com/sites/default/files/styles/full/public/2017/04/22/568212-india-gate1.jpg" height="350" width="350" /></a>
		<a href='https://en.wikipedia.org/wiki/Goa' class='pa'><img src="https://m.hindustantimes.com/rf/image_size_960x540/HT/p2/2018/08/16/Pictures/_dbca9ffa-a138-11e8-9345-8d51f8ed9678.jpg" height="350" width="350" /></a>
	</div><br>
	<div style="margin-left:150px;">
		<a href='https://en.wikipedia.org/wiki/Chandigarh' class='pa'><img src="https://chandigarhbytes.com/wp-content/uploads/2018/07/Top-View-Chandigarh-3.jpg" height="350" width="350" /></a>
		<a href='https://en.wikipedia.org/wiki/Kerala' class='pa'><img src="https://www.tripsavvy.com/thmb/iymBfJJOLxoQGCFm4o0YXHE2WMs=/3200x2400/smart/filters:no_upscale()/GettyImages-522478216-5ab12c4e3de4230036949cee.jpg" height="350" width="350" /></a>
		<a href='https://en.wikipedia.org/wiki/Frankfurt' class='pa'><img src="https://www.studying-in-germany.org/wp-content/uploads/2019/04/Frankfurt.jpg" height="350" width="350" /></a>
	</div><br><br>
	<div style="margin-left:150px;">
		<h2 style="color:black;">Why SHS?</h2>
		<p style="color:black;">SHS is a prominent market player in the Indian Online travel sector and is the most popular air ticket booking platform that helps you save money on any flight bookings. In addition to providing the best online flight tickets deals, SHS enables customers to save money on fares every time they book tickets. You might visit our website or download the SHS mobile app for booking your tickets on the go. Exclusive coupons and attractive discounts available. The secure payment channel and user-friendly interface helps user to enjoy a seamless flight ticket booking experience.</p>
	</div>
	<footer>
		<div id="chain">
			<div>
				<h5 style="color:white;">About this site</h5><br>
				<a href='About.php' class='ca'>About us</a><br><br>
				<a href='Privacy.php' class='ca'>Privacy Policy</a><br><br>
				<a href='Search.php' class='ca'>Cookies Policy</a><br><br>
				<a href='Search.php' class='ca'>Feedback</a>
			</div>

			<div>
			<h5 style="color:white;">Popular Domestic Route</h5><br>
			<a href='Search.php' class='ca'>Chennai Mumbai</a><br><br>
			<a href='Search.php' class='ca'>Delhi Mumbai</a><br><br>
			<a href='Search.php' class='ca'>Mumbai Goa</a><br><br>
			<a href='Search.php' class='ca'>Delhi Goa</a>
			</div>

			<div>
			<h5 style="color:white;">Popular International Route</h5><br>
			<a href='Search.php' class='ca'>Delhi Frankfurt</a><br><br>
			<a href='Search.php' class='ca'>Mumbai SanFrancisco</a><br><br>
			<a href='Search.php' class='ca'>Mumbai Frankfurt</a><br><br>
			<a href='Search.php' class='ca'>Delhi SanFrancisco</a>
			</div>

			<div>
			<h5 style="color:white;">Popular Indian Airlines</h5><br>
			<a href='https://www.goindigo.in/' class='ca'>Indigo airlines</a><br><br>
			<a href='http://www.airindia.in/' class='ca'>Air India airlines</a><br><br>
			<a href='https://www.spicejet.com/' class='ca'>Spicejet airlines</a><br><br>
			<a href='https://www.airasia.com/en/gb' class='ca'>Air asia airlines</a>
			</div>

			<div>
			<h5 style="color:white;">International Airlines</h5><br>
			<a href='https://www.autohotel.org/?gclid=Cj0KCQiAy579BRCPARIsAB6QoIZyjX0SHRJQXLRknyt2wnEEN3wkbaIZi8qyGlnWiFezrVP_a-hTg5EaAkN3EALw_wcB' class='ca'>Frankfurt airlines</a><br><br>
			<a href='https://flyaerohp.com/?gclid=Cj0KCQiAy579BRCPARIsAB6QoIa7AOPY6K9y2-S4alUGN5AulYpdwjWo1xq7cDI8EWEnguu8Y1Yxmi4aAtjMEALw_wcB' class='ca'>Houston airlines</a><br><br>
			<a href='https://www.seaplane.com/' class='ca'>San Francisco airlines</a><br><br>
			<a href='https://www.skyscanner.co.in/flights-to/dfw/airlines-that-fly-to-dallas-fort-worth-international-airport.html' class='ca'>Fort Worth airlines</a>
			</div>

		</div>
	</footer>
</body>
</html>